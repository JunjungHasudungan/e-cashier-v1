<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('code_order'); // untuk menyimpan code setiap orderan produk
            $table->integer('total_amount');  // untuk menyimpan total harga dari semua produk yang diorder
            $table->foreignIdFor(User::class); // untuk menyimpan nama kasir
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
