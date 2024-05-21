<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_ID');
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class, 'cart_id', 'cart_ID');
    }
}
