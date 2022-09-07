<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function items(){
        return $this->belongsToMany('App\Item');
    }

    protected $fillable = [
        'name', 'surname', 'email','address','telephone_number','total',
    ];
}
