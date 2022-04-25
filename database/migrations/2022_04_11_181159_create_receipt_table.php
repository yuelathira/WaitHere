<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipt', function (Blueprint $table) {
            $table->bigInteger('booking_id');
            $table->bigInteger('restoran_id');
            $table->bigInteger('user_id');
            $table->bigInteger('reservasi_id');
            $table->date('hari_reservasi');
            $table->time('jam_reservasi');
            $table->integer('jumlah');
            $table->bigInteger('admin_id');
            $table->string('nama_admin', 50);
            $table->string('nama_restoran', 50);
            $table->string('nama_user', 50);
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
        Schema::dropIfExists('receipt');
    }
}
