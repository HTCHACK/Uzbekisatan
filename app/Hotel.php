<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotels';
    protected $guarded = [];

    public function region(){
        return $this->belongsTo('App\Region');
    }

    public function district(){
        return $this->belongsTo('App\District');
    }
}
