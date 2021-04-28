<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailfaqinformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailfaqinformation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('faqid')->unsigned();
            $table->string('question')->nullable();
            $table->text('answer')->nullable();
            $table->timestamps();
        });

        Schema::table('detailfaqinformation', function(Blueprint $table){
            $table->foreign('faqid')->references('id')->on('faq')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailfaqinformation');
    }
}
