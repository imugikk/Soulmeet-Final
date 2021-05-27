<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricing_details', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->float('price')->nullable();
            $table->enum('price_type', ['0', '1']); //0: gratis, 1:bayar
            $table->string('type')->nullable();
            $table->foreignId('pricing_id')->constrained('pricings')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('pricing_details');
    }
}
