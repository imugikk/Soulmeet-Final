<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('judul_kelas');
            $table->text('desc_kelas');
            $table->integer('durasi_kelas');
            $table->float('harga_kelas');
            $table->text('image_preview_kelas');
            $table->integer('rating_kelas');
            $table->foreignId('pembicara_id')->constrained('expert_details')->onUpdate('cascade')->onDelete('cascade');;
            $table->text('requirement_kelas');
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
        Schema::dropIfExists('kelas');
    }
}
