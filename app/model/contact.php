<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $table = 'contacts';
    protected $fillable = [
        'name', 'email', 'subject','content'
    ];
}

