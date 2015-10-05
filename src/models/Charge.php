<?php

namespace Gbotha\Mygate\models;

use Illuminate\Database\Eloquent\Model;

class Charge extends Model
{
    /**
     * Which fields may be mass assigned
     * @var array
     */
    protected $fillable = ['customer_id', 'amount', 'description'];

    /**
     * A Charge belongs to a Customer
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * A Charge may only be refunded in full
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function refund()
    {
        return $this->hasOne(Refund::class);
    }
}