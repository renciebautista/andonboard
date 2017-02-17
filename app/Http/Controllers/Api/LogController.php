<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Log;

class LogController extends Controller
{
    public function getcurrentlog(Request $request, $slug){
    	$date = date('Y-m-d');
    	$target = Log::getDayTotalTarget($slug);
    	$actual = Log::getDayTotalActual($slug);
    	$data = ['target' => $target, 'actual' => (string)$actual];
    	return response()->json($data);
    }

    public function getcurrentlineshift(Request $request, $slug){

    	$shifts = Log::getDayShift($slug);

    	foreach ($shifts as $shift) {
    		$data[strtolower($shift->shift->shift)]['target'] = [ 'value' => $shift->target, 'bottomLabel' => "TARGET", 'color' => "#62CF73"];
			$data[strtolower($shift->shift->shift)]['value'] = str_pad($shift->actual, 4, "0");
    	}

		
    	return response()->json($data);
    }


}
