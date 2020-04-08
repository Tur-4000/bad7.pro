<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use UploadImage;
use App\Models\Page;
use App\Models\Contact;

class PortfolioController extends Controller
{
    public function index()
    {
        $type = ['image' => 'имиджевый', 'reklama' => 'рекламный'];
        $workType = '';
        $portfolio = Portfolio::where('published', 1)
            ->orderBy('date', 'desc')
            ->paginate(4);
        $page = Page::where('name', 'portfolio')->first();
        $contacts = Contact::select('phone', 'phone_viber', 'facebook', 'instagram', 'youtube')->get()->first();

        return view('portfolio', compact('portfolio', 'type', 'workType', 'page', 'contacts'));
    }

    public function filter($workType)
    {
        $type = ['image' => 'имиджевый', 'reklama' => 'рекламный'];
        $portfolio = Portfolio::where('published', 1)
            ->where('type', '=', $workType)
            ->orderBy('date', 'desc')
            ->paginate(4);
        $page = Page::where('name', 'portfolio')->first();
        $contacts = Contact::select('phone', 'phone_viber', 'facebook', 'instagram', 'youtube')->get()->first();

        return view('portfolio', compact('portfolio', 'type', 'workType', 'page', 'contacts'));
    }
}
