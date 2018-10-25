<?php

namespace NNAK\Http\Controllers;

use NNAK\Image;
use NNAK\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $context = [
            'partners' => Partner::all(),
        ];
        return view('partner.index', $context);
    }

    public function create()
    {
        return view('partner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_partner = Partner::create($request->all());
        if ($request->has('partner_image')) {
            $file = $request->file('partner_image');
            $name = time() . '_' . $file->getClientOriginalName();
            $destination = './img/partners';
            $file->move($destination, $name);
            $new_partner->icon_url = substr($destination, 2)."/".$name;
            $new_partner->save();
        }

        return redirect(route('partner'))->with('success', 'Partner added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \NNAK\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \NNAK\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit($partner_id)
    {
        $context = [
            'partner' => Partner::find($partner_id),
        ];

        return view('partner.create', $context);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \NNAK\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $partner_id)
    {
        $partner = Partner::find($partner_id);
        $partner->update($request->all());

        if ($request->has('partner_image')) {
            $file = $request->file('partner_image');
            $name = time() . '_' . $file->getClientOriginalName();
            $destination = './img/partners';
            $file->move($destination, $name);
            $partner->icon_url = substr($destination, 2)."/".$name;
            $partner->save();
        }

        return redirect(route('partner'))->with('success', 'Partner updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \NNAK\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy($partner_id)
    {
        Partner::find($partner_id)->delete();
        return redirect(route('partner'))->with('success', 'Partner deleted');
    }
}
