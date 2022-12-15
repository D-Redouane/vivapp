<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Teacher extends Model 
{
    
    protected $fillable = [
        'id',
        'name',
        'adresse',
        'phone',
        'profession'
    ];

    public function courses(){
        return $this->hasMany('App\Models\Course');
    }
}
