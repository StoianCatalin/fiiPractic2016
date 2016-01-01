<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function responses()
    {
        return $this->hasMany('App\Response');
    }
}
