<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Shift;
use Session;

class ShiftController extends Controller
{
    public function index()
    {
    	$shifts = Shift::all();
    	return view('shifts.index', compact('shifts'));
    }

    public function create()
    {
    	return view('shifts.create');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
            'shift' => 'required|max:100|unique:shifts',
            'start' => 'required',
            'end' => 'required',
        ]);

        $shift = new Shift;
        $shift->shift = strtoupper($request->shift);
        $shift->start = $request->start;
        $shift->end = $request->end;
        $shift->save();

        Session::flash('flash_message', 'Shift successfully added!');
        Session::flash('flash_class', 'alert-success');
        return redirect()->route("shifts.index");
    }
}
