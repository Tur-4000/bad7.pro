<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateMainPageRequest;
use Illuminate\Http\Request;
use App\Models\MainPage;
use App\Models\Page;

class ManageMainPageController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = MainPage::all()->first();
        $tags = Page::where('name', 'main')->first();

//        dd(__METHOD__, $data, $tags);

        return view('manage.mainpage.show', compact('data', 'tags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $content = MainPage::all()->first();

        return view('manage.mainpage.edit', compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMainPageRequest $request)
    {
//        dd(__METHOD__, $request->all());

        $mainPage = MainPage::all()->first();
        $mainPage->fill($request->all());
        $mainPage->save();

        return redirect()->route('manage.mainpage');
    }
}
