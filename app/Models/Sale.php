<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'user_id',
        'date',
        'total_value',
        'payment_date',
        'paid_value'
    ];

    //RELATIONSHIPS

    public function client() {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function examSales(){
        return $this->hasMany(ExamSale::class, 'sale_id');
    }

    public function appointmentSales(){
        return $this->hasMany(AppointmentSale::class, 'sale_id');
    }

    public function serviceSales(){
        return $this->hasMany(ServiceSale::class, 'sale_id');
    }

    public function productSales(){
        return $this->hasMany(ProductSale::class, 'sale_id');
    }

}
