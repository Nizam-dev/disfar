<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilKambingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil_kambings', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_ternak',15);
            $table->string('jenis_kambing',50);
            $table->string('jenis_kelamin_ternak',50);
            $table->string('jenis_ternak',50);
            $table->string('jumlah_ternak',15);
            $table->string('umur',15);
            $table->string('kesehatan',15);
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('profil_kambings');
    }
}
