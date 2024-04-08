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
        //
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('name');
            $table->string('birthday');
            $table->string('place_of_birth');
            $table->string('address');
            $table->string('age');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('degree');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about');
    }
};
