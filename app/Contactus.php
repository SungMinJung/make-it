<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    protected $fillable = [
        'contact_name',
        'contact_tel',
        'contact_email',
        'contact_refsite',
        'contact_content',
    ];

    protected $hidden = [
        'remember_token',
    ];
}
