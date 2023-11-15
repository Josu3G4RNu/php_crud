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
        Schema::create('students', function (Blueprint $table) {
            $table->string('no_control', 8)->primary();
            $table->foreignId('rol_id')->constrained()->onDelete('cascade');
            $table->string('name', 200);
            $table->string('lastname', 200);
            $table->foreignId('carrier_id')->constrained()->onDelete('cascade');
            $table->string('group', 3);
            $table->foreignId('status_id')->constrained()->onDelete('cascade');
            $table->string('email', 200);
            $table->string('phone', 10);
            $table->char('gender', 1);
            $table->date('birthdate');
            $table->foreignId('town_id')->constrained()->onDelete('cascade');
            $table->string('street', 200);
            $table->string('exterior_number');
            $table->string('interior_number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
