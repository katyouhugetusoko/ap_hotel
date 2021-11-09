<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    public function reserve()
    {
        return $this->belongsTo('App\Reserve');
    }
}
