<?php

namespace Gbotha\Mygate\models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * Which fields may be mass assigned
     *
     * @var array
     */
    protected $fillable = ['user_id', 'name', 'email'];

    /**
     * A Customer must be a User
     */
    public function user()
    {
        $this->belongsTo(config('mygate.user-model'));
    }

    /**
     * A Customer has subscriptions
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function subscriptions()
    {
        return $this->hasOne(Subscription::class);

    }

    /**
     * Customer can have many Credit Cards
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cards()
    {
        return $this->hasMany(Card::class);
    }

    /**
     * A Customer has many Charges
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function charges()
    {
        return $this->hasMany(Charge::class);
    }
}