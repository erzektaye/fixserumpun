<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonitoringPower extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'monitoring_power';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['voltage', 'current', 'power', 'time']; // Define fillable attributes
}
