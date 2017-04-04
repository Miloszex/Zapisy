<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['name', 'day' , 'begin_at','end_at', 'actual_space', 'space'];

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
