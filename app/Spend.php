<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spend extends Model
{
    protected $fillable = [
        'title',
        'description',
        'pay_date',
        'level',
        'price'
    ];

    public function users(){

        return $this->belongsToMany(User::class);
    }
}
