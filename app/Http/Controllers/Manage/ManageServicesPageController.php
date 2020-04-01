<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServicesPageRequest;
use App\Http\Requests\UpdateServicePageRequest;
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
            ->route('manage.services.index');

    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $service = Service::all();
        $metaData = Page::where('name', 'services')->first();

//        dd(__METHOD__, $data, $metaData);

        return view('manage.services.show', compact('service', 'metaData'));
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
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServicePageRequest $request, Service $service)
    {
//        dd(__METHOD__, $request->all(), $service);

//        $services = Service::select('id', 'title', 'description', 'description_ext', 'bg_image', 'video_url', 'order')
//            ->findOrFail($service);
        $service->fill($request->except('bg_image'));
//dd($service);
        if ($request->bg_image) {
            $imageFile = $request->bg_image;
            try {
                // Upload and save image.
                $bgImage['image'] = UploadImage::upload($imageFile, 'service')->getImageName();
                $service->bg_image = $bgImage['image'];
            } catch (UploadImageException $e) {

                return back()->withInput()->withErrors(['bgImage', $e->getMessage()]);
            }
        }
//dd($service);

        $service->save();
//dd($service);
        return redirect()->route('manage.services.index');
    }
}
