<?php

namespace Gbotha\Mygate\models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    /**
     * Which fields may be mass assigned
     * @var array
     */
    protected $fillable = ['customer_id', 'token'];

    /**
     * A Card belongs to a customer
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

}