<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServicesPageRequest;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Service;
use UploadImage;
use UploadImageException;

class ManageServicesPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        $metaData = Page::where('name', 'services')->first();

//        dd(__METHOD__, $data, $metaData);

        return view('manage.services.index', compact('services', 'metaData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = new Service();

        return view('manage.services.create', compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServicesPageRequest $request)
    {
        $service = new Service();
        $service->fill($request->except('bg_image'));
        $imageFile = $request->bg_image;
//dd(__METHOD__, $request, $imageFile, $service);
        try {
            // Upload and save image.
            $bgImage['image'] = UploadImage::upload($imageFile, 'service')->getImageName();
        } catch (UploadImageException $e) {

            return back()->withInput()->withErrors(['bgImage', $e->getMessage()]);
        }
        $service->bg_image = $bgImage['image'];
        $service->save();

        return redirect()
            ->route('manage.services');

    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Service::all();
        $metaData = Page::where('name', 'services')->first();

//        dd(__METHOD__, $data, $metaData);

        return view('manage.services.show', compact('data', 'metaData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $metaData = Page::where('name', 'services')->first();
//dd(__METHOD__, $service, $metaData);
        return view('manage.services.edit', compact('service', 'metaData'));
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

    }
}
