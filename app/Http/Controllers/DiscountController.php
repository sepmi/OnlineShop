<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDiscountRequest;
use App\Models\Discount;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Nette\Utils\DateTime;

class DiscountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_admin');
    }


    public function index()
    {

        return view('discounts.index');
    }


    public function create()
    {
        $users = User::all(['id','fname','lname']);
        $products = Product::all(['id','name']);
        $discount =  new Discount();

        return view('discounts.create',compact('users','products','discount'));
    }


    public function store(StoreDiscountRequest $request)
    {
        $starts_at = NUll; $expires_at = NULL;

       if($request['starts_at_first'] != NULL && $request['starts_at_second'] != NULL){
           $starts_at = $request['starts_at_first'] .' '. $request['starts_at_second'].':00';
       }

        if($request['expires_at_first'] != NULL && $request['expires_at_second'] != NULL){
            $expires_at = $request['expires_at_first'] .' '. $request['expires_at_second'].':00';
        }


        $discount = Discount::create([
            'title' =>$request['title'],
            'public' =>$request['public'],
            'max_number_of_uses' =>$request['max_number_of_uses'],
            'max_number_of_user_uses' =>$request['max_number_of_user_uses'],
            'discount_type' =>$request['discount_type'],
            'canUseForAllProducts' => $request['canUseForAllProducts'],

            'code' =>$request['code'],
            'description' =>$request['description'],
            'number_of_uses' =>$request['number_of_uses'],
            'discount_amount_percentage'=>$request['discount_amount_percentage'],
            'discount_amount_amount'=>$request['discount_amount_amount'],
            'starts_at'=> $starts_at,
            'expires_at' =>$expires_at,


        ]);

        if(!$request['public']){

            $ids = $request['user_id'];
            foreach ($ids as $id){
                $discount->users()->attach($id);
            }


        }

        if(!$request['canUseForAllProducts'] ){
            $p_ids = $request['product_id'];
            foreach ($p_ids as $id){
                $discount->products()->attach($id);
            }
        }


        return view('discounts.index')->with('success',"discount created successfully");
    }




    public function edit(Discount $discount)
    {
        $users = User::all(['id','fname','lname']);
        $products = Product::all(['id','name']);
        return view('discounts.edit',compact('discount','users','products'));
    }



    public function update(StoreDiscountRequest $request, Discount $discount)
    {
        $discount -> title = $request['title'];
            $discount ->public  = $request['public'];
            $discount -> max_number_of_uses = $request['max_number_of_uses'];
            $discount -> max_number_of_user_uses = $request['max_number_of_user_uses'];
            $discount -> discount_type = $request['discount_type'];
            $discount -> canUseForAllProducts =  $request['canUseForAllProducts'];

            $discount -> code = $request['code'];
            $discount -> description = $request['description'];
            $discount -> number_of_uses = $request['number_of_uses'];
            $discount -> discount_amount_percentage = $request['discount_amount_percentage'];
            $discount -> discount_amount_amount = $request['discount_amount_amount'];
            $discount -> starts_at = $request['starts_at'];
            $discount -> expires_at = $request['expires_at'];



        if(!$request['public']){

            $ids = $request['user_id'];
            foreach ($ids as $id){
                $discount->users()->attach($id);
            }


        }

        if(!$request['canUseForAllProducts'] ){
            $p_ids = $request['product_id'];
            foreach ($p_ids as $id){
                $discount->products()->attach($id);
            }
        }

        $discount->save();

        return redirect()->route('index')->with('suceess','discoutn edited successfully');
    }



    public function destroy(Discount $discount)
    {
        $discount->delete();
        $discount->save();

        return redirect()->route('index')->with('success','discount deleted successfully');
    }




    public function showAvailableDiscounts()
    {


//        date_default_timezone_set('Asia/Tehran');   fix it in the app.php
        $time = date('Y-m-d H:i:s');

        $discounts = Discount::where('expires_at','>',$time)->get();

        return view('discounts.allDiscounts',compact('discounts'));
    }
}
