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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->morphs('fileable');
            $table->string('nama_file', 255);
            $table->string('mime_file', 50);
            $table->string('ukuran_file', 10);
            $table->string('file_path', 255);
            $table->enum('jenis_file', ['KTP', 'KK', 'TANDA_TANGAN', 'AVATAR']);
            $table->bigInteger('created_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
