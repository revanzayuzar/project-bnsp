<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->string('nama');
            $table->string('nik')->unique();
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('email')->unique();
            $table->string('nomor_telepon')->unique();
            $table->enum('status_pegawai', ['Tetap', 'Kontrak', 'Magang']);
            $table->string('jabatan');
            $table->decimal('gaji');
            $table->string('pendidikan_terakhir');
            $table->string('status_perkawinan');
            $table->integer('jumlah_anak');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pegawais');
    }
};
