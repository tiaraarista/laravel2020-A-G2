<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id_kategori','nama_barang','harga','spesifikasi','qty'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
