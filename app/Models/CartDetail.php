<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CartDetail extends Pivot
{
    use HasFactory;
    protected $fillable = [
        'cart_id',
        'product_id',
        'jumlah',

    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
}
