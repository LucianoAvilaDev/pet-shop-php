<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'description',
        'observations',
        'total_value',
        'paid_value',
        'payment_date_time',
        'deadline_date_time'
    ];

    //RELATIONSHIP

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
