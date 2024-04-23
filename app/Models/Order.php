<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'payment_receipt',
        'is_paid'
    ];

    // public function user(){
    //     return $this->belongsTo(User::class, 'user_id');

    // }

    //pesanan (Order) dimiliki oleh satu pengguna (User).
    public function user(){
        return $this->belongsTo(User::class);

    }

    //pesanan (Order) memiliki banyak transaksi.
    public function transactions(){
        return $this->hasMany(Transaction::class); // 'order_id' is the foreign key.

    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

    //pesanan (Order) memiliki banyak cart.
    public function carts(){
        return $this->hasMany(Cart::class);
    }
}
