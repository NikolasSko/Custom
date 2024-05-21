<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $primaryKey = 'item_ID';

    protected $fillable = [
        'name', 'photo', 'gender', 'size', 'description', 'price', 'status'
    ];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'item_id', 'item_ID');
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class, 'item_id', 'item_ID');
    }

    public function designs()
    {
        return $this->hasMany(Design::class, 'item', 'item_ID');
    }
}
