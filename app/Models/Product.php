<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'name_product',
        'price',
        'description',
        'link',
        'creator',
        'kategori',
        'image_product'
    ];

    // satu product bisa berada pada banyak transaksi yang berbeda
    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

    // satu produk bisa terdapat di banyak cart berbeda
    public function carts(){
        return $this->hasMany(Cart::class);
    }
}
