<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    public function cart()
    {
        return $this->belongsTo(Cart::class, 'cart_id', 'cart_ID');
    }

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id', 'item_ID');
    }

    protected $fillable = [
        'cart_id', 'item_id'
    ];
    public $timestamps = false;
}
