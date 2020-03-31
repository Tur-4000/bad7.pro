<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class ManageServicesPageController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
//        $data = Contact::all()->first();
        $metaData = Page::where('name', 'services')->first();

//        dd(__METHOD__, $data, $metaData);

        return view('manage.services.show', compact('metaData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
//        $content = Contact::all()->first();
        $metaData = Page::where('name', 'services')->first();
//dd(__METHOD__, $content, $metaData);
        return view('manage.services.edit', compact('metaData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        dd(__METHOD__, $request->all());

//        $contactsPage = Contact::all()->first();
//        $contactsPage->fill($request->validated());
//        $contactsPage->save();
//
//        return redirect()->route('manage.mainpage');
    }
}
