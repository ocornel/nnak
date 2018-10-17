<?php

namespace NNAK\Http\Controllers;

use NNAK\Component;
use NNAK\Link;
use NNAK\Page;
use Illuminate\Http\Request;
use Auth;

class PageController extends Controller
{
    public function index()
    {
        $context = [
            'pages' => Page::all(),
        ];
        return view('page.index', $context);
    }

    public function create()
    {
        return view('page.create');
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
        return redirect(route('visit_page', ['PREVIEW '.$new_page->title, $new_page->id]))->with('success', "Page created successfully");
    }

    public function show($page_id)
    {
        dd(Page::find($page_id));
    }

    public function edit($page_id)
    {
        $context = [
            'page' => Page::find($page_id)
        ];
        return view('page.create', $context);
    }

    public function update(Request $request, $page_id)
    {
        $page = Page::find($page_id);
        $page->update($request->all());
        return redirect(route('visit_page', ['PREVIEW '.$page->title, $page->id]))->with('success', "Page updated successfully");
    }

    public function destroy(Page $page)
    {
        //
    }

    public function visit($page_title, $page_id) {
        $context = [
            'links' => Link::all(),
            'page' => Page::find($page_id)
        ];
        return view('page.visit', $context);
    }

    public function index_page() {
        $context = [
            'links' => Link::all(),
            'home_components' => Component::where('name', 'LIKE','Home%')->get(),
            'benefit_components' => Component::where('name', 'LIKE','Benefit%')->get(),
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
