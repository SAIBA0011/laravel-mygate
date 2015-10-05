<?php

namespace Gbotha\Mygate\models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{

    /**
     * Which fields may be mass assigned
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'discount',
        'expiry_date',
        'active'
    ];

    /**
     * Convert dates to Carbon\Carbon instances
     * @var array
     */
    protected $date = ['expiry_date'];

}