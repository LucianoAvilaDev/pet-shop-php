<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'name',
        'species',
        'breed',
        'coat',
        'age',
        'weight',
        'size',
        'photo'
    ];

    //RELATIONSHIPS

    public function owner() {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

    public function examSales() {
        return $this->hasMany(ExamSale::class, 'animal_id');
    }

    public function appointmentSales() {
        return $this->hasMany(AppointmentSale::class, 'animal_id');
    }


}
