<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;


class OrderController extends Controller
{
    public function store(StoreOrderRequest $request)
    {
//        $order = Order::create($request->validated());

        return redirect()->route('services');
    }
}
