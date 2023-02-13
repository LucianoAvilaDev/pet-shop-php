<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'social_reason',
        'fantasy_name',
        'cnpj',
        'address',
        'city_state',
        'zip',
        'phone'
    ];

    public function purchasePrices () {
        return $this->hasMany(PurchasePrice::class, 'supplier_id');
    }

    public function purchaseItems () {
        return $this->hasMany(PurchaseItem::class, 'supplier_id');
    }
}
