<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagedetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagedetail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image_detail_1')->nullable();
            $table->string('image_detail_2')->nullable();
            $table->string('image_detail_3')->nullable();
            $table->string('image_detail_4')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagedetail');
    }
}
