<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuarasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suarasiswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nama Lengkap')->unique();
            $table->string('Keluh');
            $table->string('Kelas');
            $table->string('NomorHp');
            $table->string('Jeniskelamin');
            $table->string('Kategori');
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
        Schema::dropIfExists('suarasiswa');
    }
}
