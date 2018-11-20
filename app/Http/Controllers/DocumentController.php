<?php

namespace NNAK\Http\Controllers;

use NNAK\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
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
     * @param  \NNAK\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \NNAK\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit($document_id)
    {
        return view('document.create', ['document'=>Document::find($document_id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \NNAK\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $document_id)
    {
        $document = Document::find($document_id);
        $filename = $document->document_url;
        if ($filename != null) {
            unlink($filename);
        }
        if ($request->has('document')) {
            $file = $request->file('document');
            $name = time() . '_' . $file->getClientOriginalName();
            $destination = './documents';
            $file->move($destination, $name);
            $request['document_url'] = substr($destination,2)."/".$name;
        }

        $document->update($request->all());

        return redirect(route('home'))->with('success', "Document Updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \NNAK\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        //
    }
}
