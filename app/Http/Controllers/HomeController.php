<?php

namespace NNAK\Http\Controllers;

use Illuminate\Http\Request;
use NNAK\Event;
use NNAK\Image;
use NNAK\Member;
use NNAK\Message;
use NNAK\Page;
use NNAK\Partner;
use NNAK\Slide;
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
            'member_count' => Member::all()->count(),
            'event_count' =>Event::all()->count(),
            'partner_count' =>Partner::all()->count(),
            'slide_count' =>Slide::all()->count(),
            'message' => Message::all()->last(),
        ];
        return view('admin.home', $context);
    }
}
