<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = [ 'jumlah', 'harga','product_id', 'total_harga'];
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
