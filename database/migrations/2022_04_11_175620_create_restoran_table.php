<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestoranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restoran', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('restoran_id');
            $table->string('nama_restoran', 50);
            $table->text('alamat_restoran');
            $table->integer('notelp_resto');
            $table->string('menu', 50);
            $table->string('foto', 50);
            $table->string('kategori', 20);
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
        Schema::dropIfExists('restoran');
    }
}
