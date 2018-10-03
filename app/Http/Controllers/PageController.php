<?php

namespace NNAK\Http\Controllers;

use NNAK\Link;
use NNAK\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \NNAK\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show($page_title, $page_id)
    {
        dd(Page::find($page_id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \NNAK\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \NNAK\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \NNAK\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }

    public function index_page() {
        $context = [
            'links' => Link::all(),
        ];
        return view('index', $context);
    }

    public function contact_page() {
            return view('contact');
    }

    public function about_page() {
        $context = [
            'links' => Link::all(),
        ];
            return view('about', $context);
    }

    public function events_page() {
            return view('events');
    }
}
