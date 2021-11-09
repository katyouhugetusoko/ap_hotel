<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function masuta()
    {
        return $this->belongsTo('App\Masuta','room_kinds_id','id');
    }
}
