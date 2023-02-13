<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'observations',
        'purchase_date_time',
        'total_value',
        'payment_date_time',
        'paid_value'
    ];

    protected $casts = [
        'purchase_date_time' => 'datetime',
        'payment_date_time' => 'datetime',
    ];

    //RELATIONSHIP

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function purchaseItems()
    {
        return $this->hasMany(PurchaseItem::class, 'purchase_id');
    }
}
