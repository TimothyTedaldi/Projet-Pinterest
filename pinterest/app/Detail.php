<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $garded = [];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
