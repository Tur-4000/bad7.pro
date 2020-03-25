<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index() {
        $title = 'Наши контакты';
        $contacts = true;
        $order = new Order();
        return view('contacts', compact('title', 'contacts', 'order'));
    }
}
