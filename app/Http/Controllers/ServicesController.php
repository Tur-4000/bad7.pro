<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Page;

class ServicesController extends Controller
{
    public function index() {
        $order = new Order();
//        $content = Service::all();
        $metaData = Page::where('name', 'services')->first();

        return view('services', compact('metaData', 'order'));
    }
}
