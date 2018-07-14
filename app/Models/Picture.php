<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model 
{

    /**
     *
     * @var array
     */
    protected $fillable = [
        'id' , 'type' , 'data'
    ];

    /**
     *
     * @var array
     */
    protected $hidden = [];
}