<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Region extends Model
{
    protected $table = 'regions';
    protected $guarded = ['id'];

    public function country(){
        return $this->belongsTo('App\Country');
    }

    public function districts(){
        return $this->hasMany('App\District');
    }

    public function hotels(){
        return $this->hasMany('App\Hotel');
    }

    public function tourists(){
        return $this->hasMany('App\Tourist');
    }

    public static function count(){
        return DB::table('regions')->count();
    }
}
