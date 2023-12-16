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
        Schema::create('territory_availables', function (Blueprint $table) {
            $table->id();
            $table->string('rt', 5);
            $table->string('rw', 5);
            $table->unsignedBigInteger('desa_id');
            $table->unsignedBigInteger('kecamatan_id');
            $table->unsignedBigInteger('kabupaten_id');
            $table->unsignedBigInteger('provinsi_id');
            $table->string('negara', 255);
            $table->bigInteger('created_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('desa_id')->references('id')->on('territories');
            $table->foreign('kecamatan_id')->references('id')->on('territories');
            $table->foreign('kabupaten_id')->references('id')->on('territories');
            $table->foreign('provinsi_id')->references('id')->on('territories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('territory_availables');
    }
};
