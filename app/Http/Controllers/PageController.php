<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\OrderController;

class PageController extends Controller
{

    public function __construct(private readonly OrderController $orderController) {

    }

	public function home(Request $request)
	{
		return view('home');
    }

    public function orders(Order $order) 
    {
        
        $reqOrders = json_decode($this->orderController->index()->Content(),true);
        $orders = $reqOrders['data'];

        return view('orders', compact('orders'));
    }
}