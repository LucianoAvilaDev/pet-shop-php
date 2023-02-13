<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentSale extends Model
{
    use HasFactory;

    protected $fillable = [
        'sale_id',
        'animal_id',
        'veterinarian_id',
        'unit_value',
        'quantity',
        'total_value',
        'date',
        'payment_date'
    ];

    protected $casts = [
        'date' => 'date',
        'payment_date' => 'date'
    ];

    public function sale() {
        return $this->belongsTo(Sale::class, 'sale_id', 'id');
    }

    public function animal() {
        return $this->belongsTo(Animal::class, 'animal_id', 'id');
    }

    public function veterinarian() {
        return $this->belongsTo(Veterinarian::class, 'veterinarian_id', 'id');
    }
}
