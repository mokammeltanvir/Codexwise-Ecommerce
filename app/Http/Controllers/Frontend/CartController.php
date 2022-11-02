<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function cartPage()
    {
        return view('frontend.pages.shopping-cart');
    }
}
