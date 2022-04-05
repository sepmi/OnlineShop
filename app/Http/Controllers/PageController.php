<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homePage(){
        return view('homeBase');
    }

    public function contact(){
        return view('pages.contact.index');
    }
}
