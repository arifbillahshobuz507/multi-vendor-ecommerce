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
            $table->string('name', 100);
            $table->string('image', 300)->nullable();
            $table->integer('price');
            $table->string('short_descripton')->nullable();
            $table->boolean('discount');
            $table->string('discount_price');
            $table->string('stock_quantity');
            $table->string('release_data');
            $table->enum('remark',['popular','new','top','special','trendin','regular']);
            
            // Relation Category
            $table->foreignId('category_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
            // Relation Sub_category            
            $table->foreignId('sub_category_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
            // Relation Brand            
            $table->foreignId('brand_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
         
         
         
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
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
