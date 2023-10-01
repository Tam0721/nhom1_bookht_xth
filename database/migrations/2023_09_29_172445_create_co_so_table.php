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
        Schema::create('co_so', function (Blueprint $table) {
            $table->unsignedInteger('id_co_so')->length(4)->primary();
            $table->string('ten_co_so', 255)->unique();
            $table->string('dia_chi', 255)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('co_so');
    }
};
