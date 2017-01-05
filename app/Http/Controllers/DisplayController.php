<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Line;


class DisplayController extends Controller
{
    public function show($slug)
    {
    	$line = Line::where('slug', $slug)->first();
    	return view('display.show', compact('line'));
    }
}
