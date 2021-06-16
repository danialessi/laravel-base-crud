<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'name',
        'year',
        'description',
        'price',
        'cover'
    ];
}
