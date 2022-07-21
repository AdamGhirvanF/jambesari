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
    public function up()
    {
        Schema::create('wargas', function (Blueprint $table) {
            $table->string('nik')->primary()->nullable();
            $table->string('nokk')->nullable();
            $table->string('nmkk')->nullable();
            $table->string('nama')->nullable();
            $table->string('jk')->nullable();
            $table->string('tmp_lahir')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->string('gdr')->nullable();
            $table->string('agama')->nullable();
            $table->string('15543')->nullable();
            $table->string('st_kawin')->nullable();
            $table->string('shdrt')->nullable();
            $table->string('pddkn')->nullable();
            $table->string('pkrjaan')->nullable();
            $table->string('ibu')->nullable();
            $table->string('ayah')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('dusun')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wargas');
    }
};
