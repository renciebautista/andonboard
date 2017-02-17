<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogStatus extends Model
{
    public function Logs(){
    	return $this->hasMany('App\Log');
    }
}
