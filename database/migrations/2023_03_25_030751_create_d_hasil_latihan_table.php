<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDHasilLatihanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_hasil_latihan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user')->nullable();
            $table->integer('id_paket')->nullable();
            $table->integer('nilai_twk')->nullable();
            $table->integer('nilai_tiu')->nullable();
            $table->integer('nilai_tkp')->nullable();
            $table->dateTime('start_waktu_mengerjakan')->nullable();
            $table->dateTime('end_waktu_mengerjakan')->nullable();
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
        Schema::dropIfExists('d_hasil_latihan');
    }
}
