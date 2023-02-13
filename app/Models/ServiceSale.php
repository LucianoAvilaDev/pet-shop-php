<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSale extends Model
{
    use HasFactory;

    protected $fillable = [
        'sale_id',
        'service_id',
        'unit_value',
        'quantity',
        'total_value',
        'date',
        'payment_date',
    ];

    protected $casts = [
        'date' => 'date',
        'payment_date' => 'date'
    ];

    public function sale(){
        return $this->belongsTo(Sale::class, 'sale_id', 'id');
    }

    public function service(){
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }
}
