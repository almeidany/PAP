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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('schoolnumber')->unique();
            $table->date('birth_date');
            $table->string('email')->unique();
            $table->unsignedBigInteger('phonenumber')->unique();
            $table->string('tshirt_size');
            $table->string('food_allergies');
            $table->string('image_authorization');
            $table->string('allergies_description')->nullable();
            $table->string('profile_photo')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
