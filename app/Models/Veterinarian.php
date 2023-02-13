<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veterinarian extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'crmv',
        'address',
        'city_state',
        'zip',
        'phone',
        'appointment_value'
    ];

    public function exams() {
        return $this->hasMany(Exam::class, 'veterinarian_id');
    }

    public function examSales() {
        return $this->hasMany(ExamSale::class, 'veterinarian_id');
    }

    public function appointmentSales() {
        return $this->hasMany(AppointmentSale::class, 'veterinarian_id');
    }
}
