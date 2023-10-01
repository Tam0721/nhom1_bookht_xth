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
        Schema::create('tang', function (Blueprint $table) {
            $table->unsignedInteger('id_tang')->length(2)->primary();
            $table->string('ten_tang', 10)->unique();
            $table->unsignedInteger('id_toa_nha')->length(4);
            $table->foreign('id_toa_nha')->references('id_toa_nha')->on('toa_nha')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tang');
    }
};
