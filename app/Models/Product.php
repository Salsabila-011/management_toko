<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = [
        'nama',
        'kategori',
        'harga',
        'cabang_id',
    ];

    public function cabang() { 
        return $this->belongsTo(Branch::class, 'cabang_id', 'cabang_id');
     }
}
