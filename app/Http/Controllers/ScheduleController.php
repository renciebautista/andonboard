<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Log;
use Session;

class ScheduleController extends Controller
{
    public function index(){
    	$schedules = Log::with('line')
    		->with('shift')
    		->with('status')
    		->get();
    	return view('schedule.index', compact('schedules'));
    }

    public function create(){
    	return view('schedule.create');
    }

    public function store(Request $request){
    	if($request->hasFile('file')){	
    		$file_path = $request->file('file')->move(storage_path().'/uploads/temp/',$request->file('file')->getClientOriginalName());
			\Excel::selectSheets('Sheet1')->load($file_path, function($reader) {
				Log::import($reader->get());
			});

			Session::flash('flash_message', 'Schedule is successfully uploaded.');
	        Session::flash('flash_class', 'alert-success');
    	}else{
	        Session::flash('flash_message', 'Uplaod file is required.');
	        Session::flash('flash_class', 'alert-danger');
	       
    	}

    	 return redirect()->route("schedules.create");
    }
}
