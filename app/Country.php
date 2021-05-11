<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Country extends Model
{
    protected $table='countries';
    protected $guarded = ['id'];

    public function regions(){
        return $this->hasMany('App\Region');
    }

    public static function count(){
        return DB::table('countries')->count();
    }
}
