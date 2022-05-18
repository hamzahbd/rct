<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Project;
use App\Models\CartDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function home()
    {
        return view('index', [
            'title' => "index"
        ]);
    }

    public function news()
    {
        return view('news', [
            "title" => "news"
        ]);
    }

    public function service()
    {
        return view('service', [
            "title" => "service"
        ]);
    }

    public function project()
    {
        return view('project', [
            "title" => "project",
            "projects" => Project::latest()->get()
        ]);
    }

    public function login()
    {
        return view('login', [
            "title" => "login"
        ]);
    }

    public function signup()
    {
        return view('signup', [
            "title" => "signup"
        ]);
    }

    public function aboutus()
    {
        return view('aboutus', [
            "title" => "aboutus"
        ]);
    }

    public function contact()
    {
        return view('contact', [
            "title" => "contact"
        ]);
    }

    public function products()
    {
        return view('products', [
            "title" => "products",
            "products" => Product::latest()->paginate(6),
        ]);
    }

    public function cart()
    {
        // CartDetail::where('cart_id', $cart->id)->get()
        $cart = Cart::where('user_id', Auth::id())->first();

        if ($cart == NULL) {
            $cart = Cart::Create([
                'user_id' => Auth::id(),
            ]);
        }

        return view('cart', [
            "title" => "cart",
            "cart" => $cart,
        ]);
    }

    public function product_detail(Product $product)
    {
        return view('product_detail', [
            "title" => "products",
            "product" => $product,
        ]);
    }
    //

}
