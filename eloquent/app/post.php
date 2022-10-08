<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getGetTitleAttribute()
    {
        // return strtoupper($this->title);
        return ucfirst($this->title);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = strtolower($value);
    }
}
