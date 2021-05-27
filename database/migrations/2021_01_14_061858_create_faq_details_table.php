<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq_details', function (Blueprint $table) {
            $table->id();
            $table->string('questions');
            $table->text('answers');
            $table->foreignId('faq_id')->constrained('faqs')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('faq_details');
    }
}
