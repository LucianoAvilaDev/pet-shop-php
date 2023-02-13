<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'role_id',
        'name',
        'username',
        'email',
        'password',
        'birth_date',
        'address',
        'city_state',
        'zip',
        'phone',
        'photo'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'birth_date' => 'date',
    ];

    //RELATIONSHIP

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }

    public function expenses()
    {
        return $this->hasMany(Expense::class, 'user_id', 'id');
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class, 'user_id', 'id');
    }

    public function sales()
    {
        return $this->hasMany(Sale::class, 'user_id', 'id');
    }
}
