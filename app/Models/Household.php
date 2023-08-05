<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Household extends Model
{
    protected $fillable = [
        'name',
        'addr',
        'phonenumber',
        'note',
        'status',
        'previous_meter_reading',
        'current_meter_reading',
    ];

    public function waterUsages()
    {
        return $this->hasMany(WaterUsage::class);
    }
}
