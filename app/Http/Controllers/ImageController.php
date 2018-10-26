<?php

namespace NNAK\Http\Controllers;

use NNAK\Event;
use NNAK\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $context = [
            'images' => Image::all(),
        ];
        return view('image.index', $context);
    }

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
     * @param  \NNAK\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \NNAK\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit($image_id)
    {
        $context = [
            'image' => Image::find($image_id),
            'events' => Event::all(),
        ];

        return view('image.create', $context);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \NNAK\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $image_id)
    {
        Image::find($image_id)->update($request->all());
        return redirect(route('image'))->with('success', 'Image details updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \NNAK\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy($image_id)
    {
        Image::find($image_id)->delete();
        return redirect(route('image'))->with('success', 'Image has been deleted.');
    }
}
