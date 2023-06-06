<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_like extends Model
{
    use HasFactory;
    protected $table = 'post_likes';

    protected $fillable = [ 
    	'like',
    	'dislike',
        'comment',
        'post_id',
        'users_id',
    ];
}
