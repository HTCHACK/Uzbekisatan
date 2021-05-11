<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Email;
class SendEmail extends Model
{
    protected $table = 'send_emails';
    protected $guarded = [];


    public function email(){
        return $this->belongsTo(Email::class);
    }
}
