<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
        'alias',
        'name',
        'surname',
        'members',
        'website'
    ];
}
