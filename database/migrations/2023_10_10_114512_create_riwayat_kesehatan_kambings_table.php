<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatKesehatanKambingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_kesehatan_kambings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profil_kambing_id')->constrained();
            $table->string('penyakit_sering_diderita',20);
            $table->string('obat_digunakan',20);
            $table->string('penyakit_pernah_diderita',15);
            $table->enum('sering_sakit', ['sering', 'jarang', 'tidak_pernah'])
            ->default('tidak_pernah');
            $table->enum('penanganan', ['panggil_drh', 'panggil_mantri', 'diobati_sendiri'])
            ->default('diobati_sendiri');
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
        Schema::dropIfExists('riwayat_kesehatan_kambings');
    }
}
