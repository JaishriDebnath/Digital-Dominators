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
        Schema::create('empleaves', function (Blueprint $table) {
            $table->id();
            $table->foreignId('emp_id')->constrained('employeedatas');
            $table->string('name');
            $table->string('span');
            $table->string('type');
            $table->integer('tl');
            $table->integer('lt')->nullable();
            $table->date('from');
            $table->date('to');
            $table->integer('remain')->nullable();
            $table->string('reason');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleaves');
    }
};
