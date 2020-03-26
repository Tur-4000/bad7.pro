<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use UploadImage;
use App\Models\Page;

class PortfolioController extends Controller
{
    public function index() {
        $title = 'Наши работы';
        $type = ['image' => 'имиджевый', 'reklama' => 'рекламный'];
        $workType = '';
        $portfolio = Portfolio::where('published', 1)
            ->orderBy('date', 'desc')
            ->paginate(4);
        $page = Page::where('name', 'portfolio')->first();

        return view('portfolio', compact('title', 'portfolio', 'type', 'workType', 'page'));
    }

    public function filter($workType) {
//        dd(__METHOD__, $type);
        $title = 'Наши работы';
        $type = ['image' => 'имиджевый', 'reklama' => 'рекламный'];
        $portfolio = Portfolio::where('published', 1)
            ->where('type', '=', $workType)
            ->orderBy('date', 'desc')
            ->paginate(4);
        $page = Page::where('name', 'portfolio')->first();

        return view('portfolio', compact('title', 'portfolio', 'type', 'workType', 'page'));
    }
}
