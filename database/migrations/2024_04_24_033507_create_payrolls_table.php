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
        Schema::create('payrolls', function (Blueprint $table) {
            $table->id();
            $table->string('emp_id');
            $table->string('name' );
            $table->string('branch');
            $table->string('pan');
            $table->string('position');
            $table->string('acc');
            $table->string('ifsc');
            $table->string('bankname');
            $table->date('fday');
            $table->date('lday');
            $table->Integer('bsp');
            $table->Integer('hra');
            $table->Integer('tr');
            $table->Integer('bonus');
            $table->Integer('ma');
            $table->Integer('lta');
            $table->Integer('sa');
            $table->Integer('it');
            $table->Integer('pf');
            $table->Integer('prt');
            $table->string('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payrolls');
    }
};
