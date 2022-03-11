<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCount extends Model
{
    use HasFactory;

    protected $table = 'blog_counts';

    protected $fillable =
        [
            'blog_id',
            'count'
        ];
}
