<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMSoalKunciJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_soal_kunci_jawaban', function (Blueprint $table) {
            $table->integer('skj_id');
            $table->integer('skj_id_soal')->nullable();
            $table->text('skj_id_jawaban');
            $table->longText('skj_pembahasan')->nullable();
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
        Schema::dropIfExists('m_soal_kunci_jawaban');
    }
}
