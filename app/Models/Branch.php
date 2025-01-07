<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
   
    use HasFactory;

    protected $primaryKey = 'cabang_id';
    public $incrementing = false;
    protected $keyType = 'char';

    protected $fillable = [
        'cabang_id',
        'nama'
    ];

    public function produk()
    {
        return $this->hasMany(Product::class, 'cabang_id', 'cabang_id');
    }

}
