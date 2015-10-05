<?php
namespace Gbotha\Mygate\models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    /**
     * Which fields may be mass assigned
     * @var array
     */
    protected $fillable = [
        'customer_id',
        'plan_id',
        'card_id',
        'coupon_id',
        'trial_end',
        'quantity'
    ];

    /**
     * Convert to Carbon\Carbon Instances
     * @var array
     */
    protected $dates = ['trial_end'];

    /**
     * A Plan can have multiple Customers
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany(Customer::class);
    }
}