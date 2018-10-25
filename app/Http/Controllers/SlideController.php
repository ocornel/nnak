<?php

namespace NNAK\Http\Controllers;

use NNAK\Image;
use NNAK\Page;
use NNAK\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $context = [
            'slides' => Slide::all(),
        ];
        return view('slide.index', $context);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $context = [
            'pages' => Page::all(),
        ];

        return view('slide.create', $context);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_slide = Slide::create($request->all());

        if ($request->has('slide_image')) {
            $file = $request->file('slide_image');
            $name = time() . '_' . $file->getClientOriginalName();
            $destination = './img/slides';
            $file->move($destination, $name);
            $new_slide->image_url = substr($destination, 2)."/".$name;
            $new_slide->save();

            Image::create([
                'on_gallery' => false,
                'image_url' => $new_slide->image_url,
                'caption' => $new_slide->title,
                'description' => $new_slide->tagline,
                'event_id' => $new_slide->getPage()->getEvent()->id]);
        }

        return redirect(route('slide'))->with('success', 'Slide added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \NNAK\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show(Slide $slide)
    {

    }

    public function edit($slide_id)
    {
        $context = [
            'slide' => Slide::find($slide_id),
            'pages' => Page::all(),
        ];

        return view('slide.create', $context);
    }

    public function update(Request $request, $slide_id)
    {
        $slide = Slide::find($slide_id);
        $slide->update($request->all());

        if ($request->has('slide_image')) {
            $file = $request->file('slide_image');
            $name = time() . '_' . $file->getClientOriginalName();
            $destination = './img/slides';
            $file->move($destination, $name);
            $slide->image_url = substr($destination, 2)."/".$name;
            $slide->save();

            Image::create([
                'on_gallery' => false,
                'image_url' => $slide->image_url,
                'caption' => $slide->title,
                'description' => $slide->tagline,
                'event_id' => $slide->getPage()->getEvent()->id]);
        }

        return redirect(route('slide'))->with('success', 'Slide updated successfully');
    }

    public function destroy(Slide $slide)
    {
        //
    }
}
