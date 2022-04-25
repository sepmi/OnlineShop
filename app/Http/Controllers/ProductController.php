<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Image;
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
//            'image' =>$request['image'],

        ]);
        $image_name = time().'-'.$request->file('image')->getClientOriginalName();

        Image::create([
            'image' => $image_name,
            'product_id' =>$product->id
        ]);


        $request->file('image')->storeAs('images/',$image_name);


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



        if ($product ->image){
            $image = Image::find($product->id);
            $image_name = time().'-'.$request->file('image')->getClientOriginalName();

            $image->image = $image_name;
            $request->file('image')->storeAs('images/',$image_name);

            $image->save();

        }

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
//        $categoryId = $category->id;
//        $products = Product::where('category_id',$categoryId)->get(['id','name']);

        $products = $category->products()->get(['id','name']);

        return view('products.index',compact('products'));
    }
}
