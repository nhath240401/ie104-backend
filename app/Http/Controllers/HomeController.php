<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Product;

class HomeController extends Controller
{
    public function redirect(){
        $usertype = Auth::user()->usertype;

        if($usertype == '1'){
            return view('admin.home');
        }else{
            return view('dashboard');
        }
    }
    
    public function index(){

        $product = product::all();

        return view('home.userpage', compact('product'));
    }

    public function news(){
        return view('home.news');
    }

    public function store(){
        return view('home.store');
    }

    public function recruit(){
        return view('home.recruit');
    }

    public function product_detail($id){

        $product = product::find($id);

        return view('home.product_detail', compact('product'));
    }
}
