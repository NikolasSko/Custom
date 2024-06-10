<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'order_ID');
    }

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id', 'item_ID');
    }

    protected $fillable = [
        'order_id', 'item_id'
    ];
    public $timestamps = false;
}
