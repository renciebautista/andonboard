<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Line;
use App\Shift;

class DashboardController extends Controller
{
    public function index()
    {
    	return view('dashboard.index');
    }

    public function show($slug)
    {
    	$line = Line::where('slug', $slug)->first();
    	$shifts = Shift::all();
    	return view('dashboard.show', compact('line', 'shifts'));
    }
}
