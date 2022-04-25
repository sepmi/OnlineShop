<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use App\Models\SuperCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class SuperCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','is_admin'])->except('index');
    }



    public function index()
    {

        $superCategories = SuperCategory::all();

        return view('superCategories.index',compact('superCategories'));

    }


    public function create()
    {

        $superCategory = new SuperCategory();
        return view('superCategories.create',compact(  'superCategory'));
    }


    public function store(Request $request)
    {
        $superCategory = SuperCategory::create([
            'title' => $request['title'],
            'image' => $request['image']
        ]);

        return view('superCategories.show',compact('superCategory'))->with('success','category created successfully');
    }


    public function show(SuperCategory $superCategory)
    {
        return view('superCategories.show',compact('superCategory'));
    }


    public function edit(SuperCategory $superCategory)
    {
        return view('superCategories.edit',compact('superCategory'));
    }


    public function update(Request $request, SuperCategory $superCategory)
    {
        $superCategory ->title = $request['title'];
        $superCategory->save();

        return redirect()->route('superCategories.show',$superCategory->id)->with('success','categry updated successfully');
    }


    public function destroy(SuperCategory $superCategory)
    {
        $categories = $superCategory->categories;
        foreach ($categories as $category){
            $category->delete();
        }
        $superCategory->delete();

        return redirect()->route('superCategories.index')->with('success','categry deleted successfully');
    }


}
