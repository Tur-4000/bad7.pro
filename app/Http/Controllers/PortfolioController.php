<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use UploadImage;

class PortfolioController extends Controller
{
    public function index() {
        $title = 'Наши работы';
        $type = ['image' => 'имиджевый', 'reklama' => 'рекламный'];
        $workType = '';
        $portfolio = Portfolio::where('published', 1)
            ->orderBy('date', 'desc')
            ->paginate(4);
        return view('portfolio', compact('title', 'portfolio', 'type', 'workType'));
    }

    public function filter($workType) {
//        dd(__METHOD__, $type);
        $title = 'Наши работы';
        $type = ['image' => 'имиджевый', 'reklama' => 'рекламный'];
        $portfolio = Portfolio::where('published', 1)
            ->where('type', '=', $workType)
            ->orderBy('date', 'desc')
            ->paginate(4);
        return view('portfolio', compact('title', 'portfolio', 'type', 'workType'));
    }
}
