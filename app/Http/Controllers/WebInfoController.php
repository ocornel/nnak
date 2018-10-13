<?php

namespace NNAK\Http\Controllers;

use NNAK\WebInfo;
use Illuminate\Http\Request;

class WebInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $context = [
            'webinfos' => WebInfo::all(),
        ];
        return view('webinfo.index', $context);
    }

    /**
     * Display the specified resource.
     *
     * @param  \NNAK\WebInfo $webInfo
     * @return \Illuminate\Http\Response
     */
    public function show(WebInfo $webInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \NNAK\WebInfo $webInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(WebInfo $webInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \NNAK\WebInfo $webInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WebInfo $webInfo)
    {
        //
    }
}