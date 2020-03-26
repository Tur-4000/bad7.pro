<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Page;
use UploadImage;
use UploadImageException;

class ManagePortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = ['image' => 'имиджевый', 'reklama' => 'рекламный'];
        $portfolio = Portfolio::select(['id', 'title', 'description', 'type', 'date', 'url', 'published'])
            ->orderBy('id', 'DESC')
            ->get();
        $tags = Page::where('name', 'portfolio')->first();

//        dd($tags);

        return view('manage.portfolio.index', compact('portfolio', 'type', 'tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $portfolio = new Portfolio();

        return view('manage.portfolio.create', compact('portfolio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePortfolioRequest $request)
    {
        $portfolio = new Portfolio();
        $portfolio->fill($request->except('bgimage'));
//        dd($request->all());
        $imageFile = $request->bgimage;
        try {
            // Upload and save image.
            $bgImage['image'] = UploadImage::upload($imageFile, 'portfolio')->getImageName();
        } catch (UploadImageException $e) {

            return back()->withInput()->withErrors(['bgImage', $e->getMessage()]);
        }
        $portfolio->bg_image = $bgImage['image'];
        $portfolio->save();

        return redirect()
            ->route('manage.portfolio.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = Portfolio::select(['id', 'title', 'description', 'type', 'date', 'url', 'published', 'bg_image'])
            ->findOrFail($id);

        return view('manage.portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePortfolioRequest $request, $id)
    {
        $portfolio = Portfolio::select(['id', 'title', 'description', 'type', 'date', 'url', 'published', 'bg_image'])
            ->findOrFail($id);
        $portfolio->fill($request->except('bgimage'));

        if (!$request->published) {
            $portfolio->published = false;
        }
//        dd($request->all());
        if ($request->bgimage) {
            $imageFile = $request->bgimage;
            try {
                // Upload and save image.
                $bgImage['image'] = UploadImage::upload($imageFile, 'portfolio')->getImageName();
                $portfolio->bg_image = $bgImage['image'];
            } catch (UploadImageException $e) {

                return back()->withInput()->withErrors(['bgImage', $e->getMessage()]);
            }
        }

        $portfolio->save();

        return redirect()
            ->route('manage.portfolio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        if ($portfolio) {
            $portfolio->delete();
        }
        return redirect()->route('manage.portfolio.index');
    }
}
