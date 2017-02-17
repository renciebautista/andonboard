<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Log extends Model
{
	protected $fillable = [
        'line_id', 
        'shift_id', 
        'target', 
        'actual',
        'run_date',
        'status_id',
        'sku',
        'description'
    ];
    public static function import($records){
		DB::beginTransaction();
			try {

				$records->each(function($row)  {
					$line = Line::where('line_name', $row->line)->first();
					$shift = Shift::where('shift', $row->shift)->first();
					if((!empty($line)) && (!empty($shift))){
						Log::firstOrCreate(['line_id' => $line->id, 
							'shift_id' => $shift->id, 
							'target' => $row->target, 
							'actual' => NULL,
							'run_date' => $row->run_date,
							'status_id' => 1,
							'sku' => $row->sku,
							'description' => $row->description]);
					}
					
				});
			DB::commit();
		} catch (\Exception $e) {
			dd($e);
			DB::rollback();
		}
	}

	public static function getDayTotalTarget($slug){
		$line = Line::where('slug', $slug)->first();
		return self::where('line_id', $line->id)
			->sum('target');
	}

	public static function getDayTotalActual($slug){
		$line = Line::where('slug', $slug)->first();
		return self::where('line_id', $line->id)
			->sum('actual');
	}

	public static function getDayShift($slug){
		$line = Line::where('slug', $slug)->first();
		return self::with('shift')
			->where('line_id', $line->id)
			->get();
	}

	public function status()
    {
        return $this->belongsTo('App\LogStatus');
    }

    public function line()
    {
        return $this->belongsTo('App\Line');
    }

    public function shift()
    {
        return $this->belongsTo('App\Shift');
    }
}
