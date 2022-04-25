<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservasi', function (Blueprint $table) {
            $table->bigInteger('reservasi_id');
            $table->bigInteger('restoran_id');
            $table->bigInteger('user_id');
            $table->integer('jumlah');
            $table->date('hari_reservasi');
            $table->time('jam_reservasi');
            $table->enum('request', ['Smoking','Non-Smoking']);
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
        Schema::dropIfExists('reservasi');
    }
}
