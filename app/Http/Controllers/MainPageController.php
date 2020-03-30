<?php

namespace App\Http\Controllers;

use App\Models\MainPage;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Page;

class MainPageController extends Controller
{
    public function index() {
        $order = new Order();
        $page = Page::where('name', 'mainpage')->first();
        $content = MainPage::all()->first();

        return view('index', compact('order', 'page', 'content'));
    }
}
