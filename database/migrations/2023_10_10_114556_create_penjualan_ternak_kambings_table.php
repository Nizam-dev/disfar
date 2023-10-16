<?php

use App\Models\PenjualanTernakKambing;
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
            $table->foreignId('user_id')->constrained();
            $table->string('umur',10);
            $table->string('jenis',30);
            $table->string('kelebihan_kekurangan',100);
            $table->string('kisaran_harga_jual',15);
            $table->string('no_wa',15);
            $table->string('lampiran_foto');
            $table->boolean('terjual')->nullable()->default(false);
            $table->timestamps();
        });

        PenjualanTernakKambing::create([
            'user_id'=>2,
            'umur'=>'2',
            'jenis'=>'kambing jawa',
            'kelebihan_kekurangan'=>'tidak ada',
            'kisaran_harga_jual'=>'1200000',
            'no_wa'=>'08225681313',
            'lampiran_foto'=>'kambing2.jpeg',
        ]);

        PenjualanTernakKambing::create([
            'user_id'=>2,
            'umur'=>'1',
            'jenis'=>'kambing gibas',
            'kelebihan_kekurangan'=>'tidak ada',
            'kisaran_harga_jual'=>'1800000',
            'no_wa'=>'08225681313',
            'lampiran_foto'=>'kambing1.jpeg',
        ]);
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
