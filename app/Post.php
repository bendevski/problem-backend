<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments(){
        return $this->hasMany('\App\Comment');
    }
    protected $attributes = array(
        'likes' => 0,
      );
      
    protected $fillable = [
        'title',
        'content',
    ];
    

    };
