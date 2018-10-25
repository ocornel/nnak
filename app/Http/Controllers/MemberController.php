<?php

namespace NNAK\Http\Controllers;

use NNAK\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $context = [
            'members' => Member::all(),
        ];
        return view('member.index', $context);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $new_member = Member::create($request->all());
        if ($request->has('member_image')) {
            $file = $request->file('member_image');
            $name = time() . '_' . $file->getClientOriginalName();
            $destination = './img/members';
            $file->move($destination, $name);
            $new_member->image_url = substr($destination, 2)."/".$name;
            $new_member->save();
        }

        return redirect(route('member'))->with('success', 'Member added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \NNAK\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \NNAK\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit($member_id)
    {
        $context = [
            'member' => Member::find($member_id),
        ];

        return view('member.create', $context);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \NNAK\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $member_id)
    {
        $member = Member::find($member_id);
        $member->update($request->all());

        if ($request->has('member_image')) {
            $file = $request->file('member_image');
            $name = time() . '_' . $file->getClientOriginalName();
            $destination = './img/members';
            $file->move($destination, $name);
            $member->image_url = substr($destination, 2)."/".$name;
            $member->save();
        }

        return redirect(route('member'))->with('success', 'Member updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \NNAK\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy($member_id)
    {
        Member::find($member_id)->delete();
        return redirect(route('member'))->with('success', 'Member deleted');
    }
}
