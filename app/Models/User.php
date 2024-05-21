<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'user_ID';

    protected $fillable = [
        'name', 'telegram', 'login', 'password', 'is_admin'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
