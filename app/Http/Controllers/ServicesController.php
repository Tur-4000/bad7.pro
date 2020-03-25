<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index() {
        $title = 'Услуги';
        $services = true;
        $order = new Order();
        return view('services', compact('title', 'services', 'order'));
    }
}
