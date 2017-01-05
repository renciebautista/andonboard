<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Line;

class DashboardController extends Controller
{
    public function index()
    {
    	return view('dashboard.index');
    }

    public function show($slug)
    {
    	$line = Line::where('slug', $slug)->first();
    	return view('dashboard.show', compact('line'));
    }
}
