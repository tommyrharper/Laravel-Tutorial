<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['title', 'description', 'url', 'image'];
    protected $gaureded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
