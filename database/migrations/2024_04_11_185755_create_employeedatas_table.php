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
        Schema::create('employeedatas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('emp_id')->unique();
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('branch');
            $table->string('job');
            $table->string('period');
            $table->string('salary');
            $table->string('freq');
            $table->string('sdate');
            $table->string('phone');
            $table->string('address');
            $table->string('state');
            $table->string('city');
            $table->string('zip');
            $table->string('img');
            $table->string('gender');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employeedatas');
    }
};
