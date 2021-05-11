<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\SendEmail;

class Email extends Model
{
    protected $table = 'emails';
    protected $guarded = [];

    public static function count(){
        return DB::table('emails')->count();
    }

    public function sendEmail(){
        return $this->hasMany(SendEmail::class);
    }
}
