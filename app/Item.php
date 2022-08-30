<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function course(){
        return $this->belongsTo('App\Course');
    }
    public function orders(){
        return $this->belongsToMany('App\Order');
    }

    protected $fillable = [
        'name', 'price', 'description','visible','vegetarian', 'course_id'
    ];

}
