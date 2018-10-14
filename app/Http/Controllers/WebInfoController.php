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
     * Show the form for editing the specified resource.
     *
     * @param  \NNAK\WebInfo $webInfo
     * @return \Illuminate\Http\Response
     */
    public function edit($webinfo_id)
    {
        $context = [
            'webinfo' => WebInfo::find($webinfo_id),
        ];
        return view('webinfo.edit', $context);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \NNAK\WebInfo $webInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $webinfo_id)
    {
        $webInfo = WebInfo::find($webinfo_id);
        $webInfo->update($request->all());
        return redirect(route('webinfo', ['success'=> "Website {$webInfo->name} updated successfully"]));
    }
}