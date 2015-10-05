<?php

namespace Gbotha\Mygate\models;

use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    /**
     * Which fields may be mass assigned
     * @var array
     */
    protected $fillable = [
        'charge_id',
        'amount',
        'description'
    ];

    /**
     * A Refund must belong to a charge
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function charge()
    {
        return $this->belongsTo(Charge::class);
    }
}