<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use App\Models\SuperCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','is_admin'])->except(['index','showRelateCategories']);
    }



    public function index()
    {


        $categories = Category::all(['title','id']);


        return view('category.index',compact('categories'));

    }


    public function create()
    {

        $superCategories = SuperCategory::all(['id','title']);
        $category = new Category();

        return view('category.create',compact('category' , 'superCategories'));
    }


    public function store(StoreCategoryRequest $request)
    {
        $category = Category::create([
            'title' => $request['title'],
            'image' => $request['image'],
            'super_category_id' => $request['super_category_id']
        ]);

        return view('category.show',compact('category'))->with('success','category created successfully');
    }


    public function show(Category $category)
    {
        return view('category.show',compact('category'));
    }


    public function edit(Category $category)
    {
        $superCategories = SuperCategory::all(['title','id','image']);
        return view('category.edit',compact('category','superCategories'));
    }


    public function update(StoreCategoryRequest $request, Category $category)
    {
        $category ->title = $request['title'];
        $category ->superCategory = $request['super_category_id'];
        $category->save();

        return redirect()->route('categories.show',$category->id)->with('success','categry updated successfully');
    }


    public function destroy(Category $category)
    {
        $products = $category->products;

        foreach ($products as $product){
            $product->delete();
        }

        $category->delete();

        return redirect()->route('categories.index')->with('success','categry deleted successfully');
    }

    public function showRelateCategories(SuperCategory $superCategory)
    {
//        $superCategoryId = $superCategory->id;
//        $categories = Category::where('super_category_id',$superCategoryId)->get(['title','id']);

        $categories = $superCategory->categories()->get(['id','title']);

        return view('category.index',compact('categories'));
    }
}
