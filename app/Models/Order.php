<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // registrasi nama table
    protected  $table = "orders";

    // registrasi nama fields table
    protected $fillable = ['code_order', 'total_amount'];
}
