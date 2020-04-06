<?php

namespace App\Observers;

use App\Models\Order;
use Mail;
use App\Mail\Order as MailOrder;

class OrderObserver
{
    /**
     * Handle the order "created" event.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function created(Order $order)
    {
        $params = [
            'order' => $order->id,
            'name' => $order->name,
            'company' => $order->company,
            'description' => $order->description,
            'contact' => $order->contact,
        ];

        $managerEmail = env('SALES_MANAGER_EMAIL', 'sales@bad7.pro');

//        Mail::to($managerEmail)->send(new MailOrder($params));
        Mail::to($managerEmail)->queue(new MailOrder($params));
    }

    /**
     * Handle the order "updated" event.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function updated(Order $order)
    {
        //
    }

    /**
     * Handle the order "deleted" event.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function deleted(Order $order)
    {
        //
    }

    /**
     * Handle the order "restored" event.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function restored(Order $order)
    {
        //
    }

    /**
     * Handle the order "force deleted" event.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function forceDeleted(Order $order)
    {
        //
    }
}
