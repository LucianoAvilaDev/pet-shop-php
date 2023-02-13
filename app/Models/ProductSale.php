<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSale extends Model
{
    use HasFactory;

    protected $fillable = [
        'sale_id',
        'product_id',
        'unit_value',
        'quantity',
        'total_value',
        'date',
        'payment_date'
    ];

    protected $casts = [
        'date' => 'datetime',
        'payment_date' => 'date'
    ];

    //RELATIONSHIPS

    public function sale(){
        return $this->belongsTo(Sale::class, 'sale_id', 'id');
    }

    public function product(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
