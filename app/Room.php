<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function masuta()
    {
        return $this->belongsTo('App\Masuta','room_kinds_id','id');
    }

    public function reserves()
    {
        return $this->belongsToMany('App\Reserve','details','reserve_id','room_id')->withPivot('day','price');
    }
}
