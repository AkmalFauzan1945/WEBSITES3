<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'produk';

    protected $fillable = [
        'kode_produk',
        'nama_produk',
        'id_kategori',
        'harga',
        'stok'
    ];

    public $timestamps = false;
}