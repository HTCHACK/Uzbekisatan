<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';
    protected $guarded = [];

    public function region(){
        return $this->belongsTo('App\Region');
    }

    public function hotels(){
        return $this->hasMany('App\Hotel');
    }

    public function tourists(){
        return $this->hasMany('App\Tourist');
    }
}
