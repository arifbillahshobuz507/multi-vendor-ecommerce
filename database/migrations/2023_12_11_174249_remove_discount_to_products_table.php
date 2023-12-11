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
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->removeColumn('discount');
            $table->removeColumn('discount_price');
            $table->removeColumn('stock_quantity');
            $table->after('short_descripton', function (Blueprint $table){
                $table->string('discount')->nullable();
            });
        });
    }
};
