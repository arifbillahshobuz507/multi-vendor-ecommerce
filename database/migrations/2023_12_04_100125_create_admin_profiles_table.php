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
        Schema::create('admin_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 20);
            $table->string('last_name', 20);
            $table->string('image', 300)->nullable();
            $table->string('phone', 300);
            $table->date('birth_day');
            $table->string('age', 10);
            $table->string('city');
            $table->string('address', 300);
            $table->string('gender');
            $table->longText('description');
            //Relation admin
            $table->foreignId('admin_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
           
           
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_profiles');
    }
};
