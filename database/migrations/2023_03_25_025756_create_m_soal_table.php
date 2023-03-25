<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMSoalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_soal', function (Blueprint $table) {
            $table->integer('s_id');
            $table->integer('s_id_paket')->nullable();
            $table->integer('s_id_kategori')->nullable();
            $table->longText('s_pertanyaan')->nullable();
            $table->enum('s_status_soal', ['A', 'N'])->default('A')->comment('A = Aktif', 'N = Nonaktif');
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
        Schema::dropIfExists('m_soal');
    }
}
