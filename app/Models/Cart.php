<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'product_id'
    ];

    //relasi keranjang dengan user. keranjang (Cart) dimiliki oleh satu (User).
    public function user(){
        return $this->belongsTo(User::class);
    }

    //relasi keranjang dnegan product. keranjang (Cart) dimiliki oleh satu product.
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
