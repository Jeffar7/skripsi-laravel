<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('review_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });

        Schema::table('review_user', function (Blueprint $table) {
            $table->foreign('review_id')->references('id')->on('reviews');
        });

        Schema::table('review_user', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('review_user');
    }
}
