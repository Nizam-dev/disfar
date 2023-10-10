<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatReproduksiKambingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_reproduksi_kambings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profil_kambing_id')->constrained();
            $table->enum('melahirkan', ['1', '2', '3'])
            ->default('1');
            $table->enum('sehat_aman', ['ya', 'tidak'])
            ->default('ya');
            $table->enum('kawin_ternak', ['buatan', 'alamai'])
            ->default('alamai');
            $table->date('tanggal_kawin');
            $table->date('tanggal_melahirkan');

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
        Schema::dropIfExists('riwayat_reproduksi_kambings');
    }
}
