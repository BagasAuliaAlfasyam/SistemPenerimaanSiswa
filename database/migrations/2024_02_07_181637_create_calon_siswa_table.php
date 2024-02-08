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
        Schema::create('calon_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pcs');
            $table->unsignedBigInteger('user_id')->unique();
            $table->unsignedBigInteger('jurusan_id');
            $table->unsignedBigInteger('panitia_id')->default('2');
            $table->string('nama_siswa');
            $table->string('asal_sekolah');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('agama');
            $table->string('jk');
            $table->date('tgl_daftar');
            $table->string('tahun_ajaran');
            $table->text('file_raport');
            $table->biginteger('no_tlp');
            $table->string('email');
            $table->string('alamat');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calon_siswa');
    }
};