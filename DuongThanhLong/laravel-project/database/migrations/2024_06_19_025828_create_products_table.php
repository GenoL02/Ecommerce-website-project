<?php

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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('store_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('city_id');
            $table->json('draft_content')->nullable();
            $table->string('sku');
            $table->string('name');
            $table->string('slug');
            $table->float('price');
            $table->float('discount');
            $table->enum('discount_type', ['%', 'dong']);
            $table->string('status');
            $table->integer('quantity');
            $table->string('description');
            $table->string('brand');
            $table->string('warranty');
            $table->string('warranty_type');
            $table->string('shipping');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
