<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use Mail;
use App\Mail\Order as MailOrder;

class OrderController extends Controller
{
    public function store(StoreOrderRequest $request)
    {
        $order = new Order();
        $order->fill($request->validated());
        $order->save();

        $params = [
            'order' => $order->id,
            'name' => $order->name,
            'company' => $order->company,
            'description' => $order->description,
            'contact' => $order->contact,
        ];

        $managerEmail = env('SALES_MANAGER_EMAIL', 'sales@bad7.pro');

        Mail::to($managerEmail)->send(new MailOrder($params));

        return redirect()->route('services');
    }
}
