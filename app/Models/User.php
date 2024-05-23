<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'telegram', 'login', 'password', 'is_admin'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
