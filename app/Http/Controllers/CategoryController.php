<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','is_admin'])->except('index');
    }



    public function index()
    {

        $categories = Category::all();

        return view('category.index',compact('categories'));

    }


    public function create()
    {
        $category = new Category();
        return view('category.create',compact('category'));
    }


    public function store(StoreCategoryRequest $request)
    {
        $category = Category::create([
            'title' => $request['title'],
            'image' => $request['image']
        ]);

        return view('category.show',compact('category'))->with('success','category created successfully');
    }


    public function show(Category $category)
    {
        return view('category.show',compact('category'));
    }


    public function edit(Category $category)
    {
        return view('category.edit',compact('category'));
    }


    public function update(StoreCategoryRequest $request, Category $category)
    {
        $category ->title = $request['title'];
        $category->save();

        return redirect()->route('categories.show',$category->id)->with('success','categry updated successfully');
    }


    public function destroy(Category $category)
    {

        $category->delete();

        return redirect()->route('categories.index')->with('success','categry deleted successfully');
    }
}
