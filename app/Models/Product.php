<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'unit_of_measurement_id',
        'code',
        'name',
        'description',
        'sale_price',
        'images',
        'stock_quantity',
        'storage_quantity'
    ];

    //RELATIONSHIP

    public function unitOfMeasurement()
    {
        return $this->belongsTo(UnitOfMeasurement::class, 'unit_of_measurement_id', 'id');
    }

    public function productSales()
    {
        return $this->hasMany(ProductSale::class, 'product_id', 'id');
    }

    public function productPrices()
    {
        return $this->hasMany(ProductPrice::class, 'product_id', 'id');
    }

    public function purchaseItem()
    {
        return $this->hasMany(PurchaseItem::class, 'product_id', 'id');
    }
}
