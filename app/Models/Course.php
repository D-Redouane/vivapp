<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Course extends Model 
{
  protected $table='courses';
  protected $fillable =[
    'id',
    'title',
    'description',
    'value'
  ];
    
  public function teacher(){
    return $this->belongsTo('App\Models\Teacher');
  }

  public function students(){
    return $this->belongsToMany('App\Models\Student');
  }
}
