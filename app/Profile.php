<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['title', 'description', 'url', 'image'];
    protected $gaureded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/0b2rQ4jUnVrwt8Oa2b5tSBEDALH0WsvXXNzW06z6.png';
        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
