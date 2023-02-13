<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchase_id',
        'product_id',
        'supplier_id',
        'unit_value',
        'quantity',
        'total_value'
    ];

    public function purchase () {
        return $this->belongsTo(Purchase::class, 'purchase_id', 'id');
    }

    public function product() {
        return $this->belongTo(Product::class, 'product_id', 'id');
    }

    public function supplier() {
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }

}
