<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'cpf',
        'address',
        'city_state',
        'zip',
        'phone'
    ];

    public function animals() {
        return $this->hasMany(Animal::class, 'client_id');
    }

    public function sales() {
        return $this->hasMany(Sale::class, 'client_id');
    }
}
