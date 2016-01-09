<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    public function applicants() {
        return $this->hasMany('App\Applicant');
    }
    public function groups()
    {
        return $this->hasMany('App\Group');
    }
    public function questions()
    {
        return $this->hasMany('App\Question');
    }
}
