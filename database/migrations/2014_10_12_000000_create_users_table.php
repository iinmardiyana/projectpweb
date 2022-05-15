<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() #Digunakan ketika akan membuat skema atau struktur dari tabel
    #Up ini akan dieksekusi ketika mengetkan migrate
    #Tidak lagi membuat tabel dengan sql client melainkan bisa melalui kodingan
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    #Untuk menghilangkan skema yang sudah dibuat
    {
        Schema::dropIfExists('users');
    }
};
