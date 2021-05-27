<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanySosmedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_sosmeds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sosmed_id')->constrained('sosmeds')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('config_id')->constrained('configs')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('company_sosmeds');
    }
}
