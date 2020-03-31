<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Contact;

class ContactsController extends Controller
{
    public function index() {
        $order = new Order();
        $contacts = Contact::all()->first();
        $metaData = Page::where('name', 'contacts')->first();

        return view('contacts', compact('contacts', 'order', 'metaData'));
    }
}
