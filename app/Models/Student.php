<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Student extends Model 
{
    
    protected $fillable = [
        'id',
        'name',
        'adresse',
        'phone',
        'career'
    ];

    public function course(){
        return $this->belongsToMany('App\Models\Course');
    }
}
