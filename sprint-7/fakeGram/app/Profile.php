<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    { 
        return '/storage/' . ($this->image) ? '/storage/'. $this->image : 'profile/2XcFl1WR79kynbCgAFQQZC1t8vopKt855HYYaY2y.jpeg';
    }

    public function followers() {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
