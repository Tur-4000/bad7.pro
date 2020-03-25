<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Http\Request;
use App\Models\Order;

class ManageOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::select('id', 'name', 'description', 'note', 'company', 'contact')
            ->orderBy('id', 'DESC')
            ->paginate();
        $head = 'Заявки';

        return view('manage.index', compact('orders', 'head'));
    }

    public function deleted()
    {
        $orders = Order::onlyTrashed()
            ->select('id', 'name', 'description', 'note', 'company', 'contact')
            ->orderBy('id', 'DESC')
            ->paginate();

        $head = 'Удалённые заявки';

        return view('manage.index', compact('orders', 'head'));
    }

    /**
     * Restore deleted resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        $order = Order::withTrashed()->where('id', $id);
        if ($order) {
            $order->restore();
        }

        return redirect()->route('manage.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);

        return view('manage.orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);

        return view('manage.orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->note = $request->note;
        $order->save();

        return redirect()->route('manage.order.show', $order);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        if ($order) {
            $order->delete();
        }

        return redirect()->route('manage.index');
    }
}
