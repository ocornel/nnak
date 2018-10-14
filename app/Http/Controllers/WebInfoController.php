<?php

namespace NNAK\Http\Controllers;

use NNAK\WebInfo;
use Illuminate\Http\Request;

class WebInfoController extends Controller
{
    public function index()
    {
        $context = [
            'webinfos' => WebInfo::all(),
        ];
        return view('webinfo.index', $context);
    }

    public function edit($webinfo_id)
    {
        $context = [
            'webinfo' => WebInfo::find($webinfo_id),
        ];
        return view('webinfo.edit', $context);
    }

    public function update(Request $request, $webinfo_id)
    {
        $webInfo = WebInfo::find($webinfo_id);
        $webInfo->update($request->all());
        return redirect(route('webinfo'))->with('success', "Website {$webInfo->name} information updated successfully");
    }
}