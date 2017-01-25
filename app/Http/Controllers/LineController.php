<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Line;
use Session;

class LineController extends Controller
{
    public function index()
    {
    	$lines = Line::all();
    	return view('lines.index', compact('lines'));
    }

    public function create()
    {
    	return view('lines.create');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
            'line_name' => 'required|max:100|unique:lines',
            'node' => 'required',
        ]);

        $line = new Line;
        $line->line_name = strtoupper($request->line_name);
        $line->slug = strtolower(str_replace(' ', '', $request->line_name));
        $line->node = $request->node;
        $line->save();

        Session::flash('flash_message', 'Line successfully added!');
        Session::flash('flash_class', 'alert-success');
        return redirect()->route("lines.index");
    }
}
