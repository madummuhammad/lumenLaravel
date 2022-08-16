<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * @var string
     */
    protected $table = 'post';

    /**
     * @var array
     */
    protected $fillable = [
        'title', 'content',
    ];
}