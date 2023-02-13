<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitOfMeasurement extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'label'
    ];

    //RELATIONSHIPs

    public function products()
    {
        return $this->hasMany(Product::class, 'unit_of_measurement_id', 'id');
    }
}
