<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','is_admin'])->except('showRelateProducts');
    }

    public function create()
    {
        $product = new Product();
        $categories = Category::all(['id','title']);

        return view('products.create',compact('product','categories'));
    }


    public function store(StoreProductRequest $request)
    {
        $product = Product::create([

            'name' =>$request['name'],
            'price' =>$request['price'],
            'category_id' =>$request['category_id'],
            'image' =>$request['image'],

        ]);
        return redirect()->route('products.show',$product)->with('success','product created succesfully');
    }


    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }


    public function edit(Product $product)
    {

        $categories = Category::all('id','title');

        return view('products.edit',compact('product','categories'));
    }


    public function update(StoreProductRequest $request, Product $product)
    {

        $product ->name = $request['name'];
        $product ->price = $request['price'];
        $product ->category_id = $request['category_id'];
        $product ->image = $request['image'];

        $product ->save();


        return redirect()->route('products.show',compact('product'))->with('success','product updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('index')->with('success','Product deleted successfully');
    }


    public function showRelateProducts(Category $category)
    {

        $products = $category->products;

        return view('products.index',compact('products'));
    }
}
