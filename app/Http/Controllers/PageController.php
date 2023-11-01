<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class PageController extends Controller
{
	public function home(Request $request)
	{

		return view('home');
    }

    public function orders(Order $order) 
    {
        return view('orders');
    }
}