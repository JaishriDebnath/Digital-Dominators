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
        Schema::create('wfhleaves', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wemp_id')->constrained('employeedatas');
            $table->string('wname');
            $table->string('wspan');
            $table->string('wtype');
            $table->integer('wlt')->nullable();
            $table->integer('wtl');
            $table->date('wfrom');
            $table->date('wto');
            $table->string('wremain')->nullable();
            $table->string('wreason');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wfhleaves');
    }
};
