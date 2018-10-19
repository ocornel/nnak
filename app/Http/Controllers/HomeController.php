<?php

namespace NNAK\Http\Controllers;

use Illuminate\Http\Request;
use NNAK\Event;
use NNAK\Image;
use NNAK\Page;
use NNAK\Testimonial;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $context = [
            'page_count' => Page::all()->count(),
            'event_count' =>Event::all()->count(),
            'image_count' =>Image::all()->count(),
            'testimonial_count' =>Testimonial::all()->count()
        ];
        return view('admin.home', $context);
    }
}
