<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('establishment');
            $table->string('city');
            $table->string('speciality');
            $table->string('cin');
            $table->enum('gender', ['male', 'female'])->nullable(); // Add the 'gender' field as an enum
            $table->string('phone_number')->nullable(); // Add the 'phone_number' field
            $table->unsignedSmallInteger('study_year')->nullable();
            $table->string('role')->default('user'); // Add the 'role' column
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
};
