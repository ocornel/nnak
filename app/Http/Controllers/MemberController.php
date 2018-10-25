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
        $new_member->role = strtolower($new_member->role);

        return redirect(route('member'))->with('success', 'Member added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \NNAK\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show($member_id)
    {
        $context = [
            'member' => Member::find($member_id),
        ];

        return view('member.show', $context);
    }

    public function edit($member_id)
    {
        $context = [
            'member' => Member::find($member_id),
        ];

        return view('member.create', $context);
    }

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
        $member->role = strtolower($member->role);


        return redirect(route('member'))->with('success', 'Member updated successfully');
    }

    public function destroy($member_id)
    {
        Member::find($member_id)->delete();
        return redirect(route('member'))->with('success', 'Member deleted');
    }
}
