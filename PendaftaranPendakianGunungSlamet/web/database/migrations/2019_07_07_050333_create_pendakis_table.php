<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendakisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaki', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_pendakian',50);
            $table->string('nama',200);
            $table->text('alamat');
            $table->char('no_hp',15);
            $table->string('email',50);
            $table->enum('jenis_kelamin',['Laki-Laki', 'Perempuan']);
            $table->char('no_id',50);
            $table->enum('jenis_id', ['KTP', 'NIK', 'KK', 'Kartu Pelajar']);
            $table->enum('kebangsaan', ['Lokal', 'Mancanegara']);
            $table->enum('pekerjaan', [
                'Belum/Tidak Bekerja',
                'Pelajar/Mahasiswa',
                'Wiraswasta',
                'Karyawan Swasta',
                'Buruh',
                'Lainnya'
            ]);
            $table->enum('status', ['Ketua', 'Member']);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendakis');
    }
}
