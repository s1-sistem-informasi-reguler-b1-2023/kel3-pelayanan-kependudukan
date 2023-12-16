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
        Schema::create('residents', function (Blueprint $table) {
            $table->id();
            $table->string('no_kk', 255);
            $table->string('nik', 255);
            $table->string('nama_lengkap', 255);
            $table->enum('jenis_kelamin', ['LAKI_LAKI', 'PEREMPUAN']);

            $table->string('tempat_lahir', 255);
            $table->date('tanggal_lahir');

            $table->string('agama', 255)->nullable();
            $table->string('pekerjaan', 50)->nullable();
            $table->enum('status_perkawinan', ['MENIKAH', 'BELUM_MENIKAH'])->nullable();

            $table->text('alamat');
            $table->string('rt', 5);
            $table->string('rw', 5);
            $table->unsignedBigInteger('desa_id');
            $table->unsignedBigInteger('kecamatan_id');
            $table->unsignedBigInteger('kabupaten_id');
            $table->unsignedBigInteger('provinsi_id');
            $table->string('negara', 255);

            $table->text('alamat_asal')->nullable();
            $table->string('rt_asal', 5)->nullable();
            $table->string('rw_asal', 5)->nullable();
            $table->string('desa_asal', 255)->nullable();
            $table->string('kecamatan_asal', 255)->nullable();
            $table->string('kabupaten_asal', 255)->nullable();
            $table->string('provinsi_asal', 255)->nullable();
            $table->string('negara_asal', 255)->nullable();

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
        Schema::dropIfExists('residents');
    }
};
