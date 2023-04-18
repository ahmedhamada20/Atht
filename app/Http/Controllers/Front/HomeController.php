<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.index');
    }


    public function Details_products($id)
    {
       $data = Product::findorfail($id);
       return view('front.product.index',compact('data'));
    }

    public function shop_grid()
    {
        return view('front.shop_grid.index');
    }
    public function products()
    {
        return view('front.product.index');
    }
    public function post()
    {
        return view('front.post.index');
    }
    public function cart()
    {
        return view('front.cart.index');
    }
    public function checkout()
    {
        return view('front.checkout.index');
    }
    public function account()
    {
        return view('front.account.index');
    }
    public function track_order()
    {
        return view('front.track_order.index');
    }
 
    public function compare()
    {
        return view('front.compare.index');
    }
    public function blog()
    {
        return view('front.blog.index');
    }
    public function contact_us()
    {
        return view('front.contact_us.index');
    }

}
