<?php

namespace NNAK\Http\Controllers;

use NNAK\Event;
use Illuminate\Http\Request;
use NNAK\Link;
use NNAK\Page;
use Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $context = [
            'events' => Event::all(),
        ];
        return view('event.index', $context);
    }

    public function create()
    {
        return view('event.create');
    }

    public function store(Request $request)
    {
        $request['url'] = strtolower(str_replace(" ", "-", $request->title));
        $request['created_by'] = Auth::user()->id;
        $new_page = Page::create($request->all());
        Link::create([
            'name' => "Page: ".$new_page->title,
            'title' => $new_page->title,
            'url' => $new_page->url.'/p'.$new_page->id
        ]);

        Event::create([
            'date' => $request->date,
            'intro' => $request->intro,
            'page_id' =>$new_page->id,
        ]);

        return redirect(route('visit_page', ['PREVIEW '.$new_page->title, $new_page->id]))->with('success', "Page created successfully");
    }

    public function show(Event $event)
    {
        //
    }

    public function edit($event_id)
    {
        $event = Event::find($event_id);
        $context = [
            'event' => $event,
            'page' =>$event->getPage(),
        ];
        return view('event.create', $context);
    }

    public function update(Request $request, $event_id)
    {
        $event = Event::find($event_id);
        $page = $event->getPage();
        $page->update($request->all());
        $event->update($request->all());
        return redirect(route('visit_page', ['PREVIEW '.$page->title, $page->id]))->with('success', "Page updated successfully");
    }

    public function destroy(Event $event)
    {
        //
    }
}
