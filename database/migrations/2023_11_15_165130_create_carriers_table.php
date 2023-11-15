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
        Schema::create('carriers', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('reticule');
            $table->string('oficail_key');
            $table->string('scholar_level');
            $table->string('shortened_name');
            $table->string('max_charge');
            $table->string('credits');
            $table->string('modality');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carriers');
    }
};
