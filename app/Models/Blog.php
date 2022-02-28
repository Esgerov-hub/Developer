<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $fillable =
        [
            'user_id',
            'image',
            'title',
            'text'
        ];

    public function user()
    {
        return $this->hasMany('users','id','user_id');
    }
}
