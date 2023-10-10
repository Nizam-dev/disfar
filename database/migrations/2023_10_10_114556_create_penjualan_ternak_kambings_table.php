<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanTernakKambingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan_ternak_kambings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profil_kambing_id')->constrained();
            $table->string('umur',15);
            $table->string('jenis',15);
            $table->string('kelebihan_kekurangan',50);
            $table->string('kisaran_harga_jual',15);
            $table->string('no_wa',15);
            $table->string('lampiran_foto');
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
        Schema::dropIfExists('penjualan_ternak_kambings');
    }
}
