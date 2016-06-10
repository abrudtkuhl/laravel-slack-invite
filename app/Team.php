<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name', 'token', 'slug'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
