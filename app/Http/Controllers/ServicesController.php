<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Contact;

class ServicesController extends Controller
{
    public function index() {
        $order = new Order();
//        $content = Service::all();
        $metaData = Page::where('name', 'services')->first();
        $contacts = Contact::select('phone', 'phone_viber', 'facebook', 'instagram', 'youtube')->get()->first();

        return view('services', compact('metaData', 'contacts', 'order'));
    }
}
