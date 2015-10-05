<?php

namespace Gbotha\Mygate\models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    /**
     * Which fields may be mass assigned
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'amount',
        'currency',
        'interval',
        'interval_count',
        'trial_period_days',
        'statement_descriptor'
    ];
}