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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('question', 250);
            $table->text('answer');
            $table->string('shopify_product_id', 50)->index();
            $table->string('shop_id', 50)->index();
            $table->string('customer_email', 50)->index();
            $table->string('customer_name', 50)->index()->nullable();
            $table->tinyInteger('status')->default(1)
                ->comment('1: active, 0: inactive, 2: hidden');
            $table->boolean('is_verified')->default(0)
                ->comment('0: not verified, 1: verified');
            $table->boolean('is_featured')->default(0);
            $table->integer('up_votes')->default(0);
            $table->integer('down_votes')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
