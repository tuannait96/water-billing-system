<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaterMeter extends Model
{
     protected $fillable = [
        'household_id',
        'meternumber',
    ];

    public function household()
    {
        return $this->belongsTo(Household::class);
    }
}
