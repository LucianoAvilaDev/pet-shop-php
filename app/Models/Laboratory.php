<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratory extends Model
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

    public function exams() {
        return $this->hasMany(Exam::class, 'laboratory_id');
    }
}
