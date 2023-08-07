<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    protected $guarded = [];

    // public function comments()
    // {
    //     return $this->hasMany(Comments::class)->whereNull('parent_id');
    // }
}
