<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMKategoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_kategori', function (Blueprint $table) {
            $table->integer('kt_id');
            $table->string('kt_nama')->nullable();
            $table->enum('kt_tipe_soal', ['single_choice', 'multiple_choice'])->nullable();
            $table->text('kt_nilai_benar');
            $table->integer('kt_nilai_salah')->default(0);
            $table->integer('kt_nilai_kosong')->default(0);
            $table->integer('kt_passing_grade')->default(0);
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
        Schema::dropIfExists('m_kategori');
    }
}
