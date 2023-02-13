<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamSale extends Model
{
    use HasFactory;

    protected $fillable = [
        'exam_id',
        'sale_id',
        'animal_id',
        'veterinarian_id',
        'request_date',
        'expected_arrival_date',
        'arrival_date',
        'total_value',
        'payment_date'
    ];

    protected $casts = [
        'request_date' => 'date',
        'expected_arrival_date' => 'date',
        'arrival_date' => 'date',
        'payment_date' => 'date',
    ];

    //RELATIONSHIPS

    public function exam(){
        return $this->belongsTo(Exam::class, 'exam_id', 'id');
    }

    public function sale(){
        return $this->belongsTo(Sale::class, 'sale_id', 'id');
    }

    public function animal(){
        return $this->belongsTo(Animal::class, 'animal_id', 'id');
    }

    public function veterinarian(){
        return $this->belongsTo(Veterinarian::class, 'veterinarian_id', 'id');
    }

}
