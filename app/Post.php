<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $casts = [
        'comments' => 'array'
    ];

    protected $fillable = [
        'title',
        'content'
    ];
};
