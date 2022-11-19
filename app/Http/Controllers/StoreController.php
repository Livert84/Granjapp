<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Role;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function front_page(Request $request)
    {

        $user = auth()->user();
        //dd($user->role);
        return view('public.front-page', [
            'products' => Product::all(),


        ]);
    }

    public function about()
    {
        return view('public.about');
    }

    public function contact()
    {
        return view('public.contact');
    }

    public function pricing()
    {
        return view('public.pricing');
    }

    public function events()
    {
        return view('public.events');
    }

    public function checkout_page(Request $request) {

        return view('public.checkout-page');
    }
}
