<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaterUsage extends Model
{
    protected $fillable = [
        'household_id',
        'year',
        'quarter',
        'meter_reading',
        'consumption',
    ];

    public function household()
    {
        return $this->belongsTo(Household::class);
    }
}
