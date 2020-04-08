<?php

namespace App\Http\Controllers;

use App\Models\MainPage;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Page;
use App\Models\Contact;

class MainPageController extends Controller
{
    public function index()
    {
        $order = new Order();
        $page = Page::where('name', 'mainpage')->first();
        $content = MainPage::all()->first();
        $contacts = Contact::select('phone', 'phone_viber', 'facebook', 'instagram', 'youtube')->get()->first();

// dd(__METHOD__, $contacts, $content, $page, $order);

        return view('index', compact('order', 'page', 'content', 'contacts'));
    }
}
