<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'laboratory_id',
        'veterinarian_id',
        'name',
        'description',
        'conclusion_days',
        'value'
    ];

    public function laboratory() {
        return $this->belongsTo(Laboratory::class, 'laboratory_id', 'id');
    }

    public function veterinarian() {
        return $this->belongsTo(Veterinarian::class, 'veterinarian_id', 'id');
    }

    public function examSales() {
        return $this->hasMany(ExamSale::class, 'exam_id');
    }
}
