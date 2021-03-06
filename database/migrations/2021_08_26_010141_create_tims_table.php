<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tims', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tim');
            $table->string('asal_sekolah');
            $table->string('asal_kota');
            $table->foreignId('user_id')->constrained();
            $table->string('bukti_transfer');
            $table->string('norek');
            $table->string('nama_bank');
            $table->string('nama_akun_bank');
            $table->integer('coin');
            $table->integer('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tims');
    }
}