<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'social_reason',
        'fantasy_name',
        'address',
        'city_state',
        'zip',
        'logo',
        'phone',
    ];

}
