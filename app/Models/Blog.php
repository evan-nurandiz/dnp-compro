<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_title',
        'blog_thumbnail',
        'blog_body',
        'blog_created_by',
        'read_time',
        'blog_slug',
        'blog_like',
        'blog_view'
    ];
}
