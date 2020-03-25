<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class MainPageController extends Controller
{
    public function index() {
        $title = 'Главная';
        $order = new Order();
        return view('index', compact('title', 'order'));
    }
}
