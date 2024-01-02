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
        Schema::create('customer_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 20);
            $table->string('last_name', 20);
            $table->string('image', 300)->nullable();
            $table->string('phone', 300);
            $table->date('birth_day');
            $table->string('age', 10);
            $table->string('city');
            $table->string('shipping_address', 300);
            $table->enum('gender', ['male', 'female']);
            $table->longText('description');
            
            
            
            //Relation customer
            
            
            
            $table->foreignId('customer_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
           
           
           
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_profiles');
    }
};
