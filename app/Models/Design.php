<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_ID');
    }

    public function item()
    {
        return $this->belongsTo(Item::class, 'item', 'item_ID');
    }

    protected $fillable = [
        'user_id', 'item', 'gender', 'size', 'design_description', 'reference', 'is_design'
    ];
    public $timestamps = false;
}
