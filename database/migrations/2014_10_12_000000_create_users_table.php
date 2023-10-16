<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama',30);
            $table->string('username',15);
            $table->string('dusun',20)->nullable();
            $table->string('alamat',40)->nullable();
            $table->string('nohp',15);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role',15);
            $table->enum('status_akun', ['0', '1'])
            ->default('0');
            $table->string('token_lupapassword')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        User::create([

            'nama'=>'admin peternakan',
            'email'=>'admin@gmail.com',
            'username'=>'admin',
            'password'=>bcrypt(123),
            'role'=>'admin',
            'nohp'=>'081123',
            'status_akun'=>"1",
        ]);

        User::create([
            'nama'=>' anam peternak',
            'email'=>'anam45188@gmail.com',
            'username'=>'peternak',
            'password'=>bcrypt(123),
            'role'=>'peternak',
            'nohp'=>'086181',
            'status_akun'=>"1",
            'dusun'=>'Dusun Gedor'

        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
