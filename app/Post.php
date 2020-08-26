<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['caption', 'user_id', 'created_at', 'image'];
    protected $gaurded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
