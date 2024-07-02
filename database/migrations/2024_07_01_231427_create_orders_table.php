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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('invoice_number')->unique();
            $table->string('costumer_name');
            $table->string('costumer_phone');
            $table->string('delivery_address');
            $table->string('delivery_phone')->nullable();
            $table->string('product_name');
            $table->string('notes');
            $table->integer('qty');
            $table->double('price');
            $table->double('discount')->default(0);
            $table->double('total_price');
            $table->double('ongkir')->default(0);
            $table->double('tax')->default(0);
            $table->double('grand_total_price');
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
