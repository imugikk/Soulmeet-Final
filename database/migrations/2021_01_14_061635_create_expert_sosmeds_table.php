<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpertSosmedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expert_sosmeds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('expert_detail_id')->constrained('expert_details')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('sosmed_id')->constrained('sosmeds')->onUpdate('cascade')->onDelete('cascade');
            $table->string('url');
            $table->integer('st')->default(0);
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
        Schema::dropIfExists('expert_sosmeds');
    }
}
