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
        Schema::create('student', function (Blueprint $table) {
            $table->string('fisrtname', 100);
            $table->string('lastname', 100);
            $table->string('email', 60)->primary();
            $table->string('password', 70);
            $table->string('batch', 10);
            $table->string('department', 60);
            $table->string('phonenumber', 12);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
