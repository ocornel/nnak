<?php

namespace NNAK\Http\Controllers;

use NNAK\Component;
use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function index()
    {
        $context = [
            'components' => Component::all(),
        ];
        return view('component.index', $context);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show(Component $component)
    {
        //
    }

    public function edit($component_id)
    {
        $context = [
            'component' => Component::find($component_id),
        ];
        return view('component.edit', $context);
    }

    public function update(Request $request, $component_id)
    {

    }

    public function destroy(Component $component)
    {
        //
    }
}
