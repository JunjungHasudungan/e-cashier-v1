<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            // untuk menyimpan code setiap orderan produk
            $table->integer('code_order');

            // untuk menyimpan total harga dari semua produk yang diorder

            $table->integer('total_amount');

            // untuk menyimpan nama kasir
            $table->foreignIdFor(User::class);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
