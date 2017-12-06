<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $fillable = [
        'name', 'phone', 'email', 'message', 'code'
    ];
}
