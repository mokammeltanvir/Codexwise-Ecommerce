<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = User::where('role_id', 2)->select('id', 'name', 'email', 'phone', 'created_at')->latest('id')->paginate(15);
        return view('backend.pages.customer.index', compact('customers'));
    }
}
