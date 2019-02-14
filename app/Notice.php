<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $fillable=[
        'id',
        'subject',
        'content',
        'cnt',
    ];
    protected $hidden=[
        'remember_token',
    ];
}
