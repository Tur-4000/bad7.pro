<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Contact;
use App\Models\Service;

class ServicesController extends Controller
{
    public function index() {
        $order = new Order();
//        $content = Service::all();
        $metaData = Page::where('name', 'services')->first();
        $contacts = Contact::select('phone', 'phone_viber', 'facebook', 'instagram', 'youtube')->get()->first();
        $services = Service::select('title', 'description', 'description_ext', 'bg_image', 'video_url', 'order')
            ->orderBy('order')
            ->get();

        return view('services', compact('metaData', 'services', 'contacts', 'order'));
    }
}
