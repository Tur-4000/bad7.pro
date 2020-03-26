<?php

namespace App\Http\Controllers;

use App\Models\MainPage;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Page;

class MainPageController extends Controller
{
    public function index() {
        $title = 'Главная';
        $order = new Order();
        $page = Page::where('name', 'main')->first();
        $content = MainPage::all()->first();

        return view('index', compact('title', 'order', 'page', 'content'));
    }
}
