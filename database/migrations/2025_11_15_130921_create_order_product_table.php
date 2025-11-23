<?php

use App\Models\{Order, Product};
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('order_product', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');  // untuk jumlah order per produk

            // untuk jumlah total harga per order berdasarkan jumlah produk
            $table->integer('sub_total');

            // untuk foreign key ke table orders
            $table->foreignIdFor(Order::class);

            // untuk foreign key ke table products 
            $table->foreignIdFor(Product::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_product');
    }
};
