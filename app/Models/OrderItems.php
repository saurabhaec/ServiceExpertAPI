<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model 
{

    use SoftDeletes;

	protected $table = 'order_items';

	/**
     *
     * @var array
     */
    protected $fillable = [
        'id','oid','pid', 'quantity', 'amount' , 'tax'
    ];

    /**
     *
     * @var array
     */
    protected $hidden = [];

    protected $dates = ['deleted_at'];

}