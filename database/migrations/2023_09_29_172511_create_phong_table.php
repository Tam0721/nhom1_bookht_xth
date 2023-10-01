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
        Schema::create('phong', function (Blueprint $table) {
            $table->increments('id_phong');
            $table->string('ten_phong', 255);
            $table->boolean('phong_status')->default(0);
            $table->unsignedInteger('id_loai_phong')->length(4);
            $table->foreign('id_loai_phong')->references('id_loai_phong')->on('loai_phong')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('id_co_so')->length(4);
            $table->foreign('id_co_so')->references('id_co_so')->on('co_so')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('id_tang')->length(2);
            $table->foreign('id_tang')->references('id_tang')->on('tang')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('phong');
    }
};
