<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable=[
        'order_id',
        'product_id'
    ];

    // transaksi dimiliki oleh satu (Order).
    //belongsTo menentukan nama kolom untuk mengaitkan Transaction dengan Order.
    public function order(){
        return $this->belongsTo(Order::class, 'order_id');
    }

    // transaksi dimiliki oleh satu (product).
    //belongsTo menentukan nama kolom untuk mengaitkan Transaction dengan product.
    public function product(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}
