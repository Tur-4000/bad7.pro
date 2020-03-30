<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Contact;

class ContactsController extends Controller
{
    public function index() {
        $contacts = true;
        $order = new Order();
        $content = Contact::all()->first();
        $metaData = Page::where('name', 'contacts')->first();

        return view('contacts', compact('content', 'contacts', 'order', 'metaData'));
    }
}
