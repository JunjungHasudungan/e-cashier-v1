<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // registrasi nama table products
    protected $table = 'products';

    // registrasi nama properti / nama fields dari products
    protected $fillable = [
        'name',
        'size',
        'price',
        'description',
    ];

    // membuat fungsi relasi table product ke stocks
    public function stocks() {
        return $this->hasMany(Stock::class);
    }
}
