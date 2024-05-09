<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car_returns extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'license_plate',
        'return_date',
    ];

    public function user()
    {
        return $this->belongsTo(Users::class);
    }
}
