<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailaddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailaddresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('city');
            $table->string('province');
            $table->string('zip_code');
            $table->string('country');
            $table->rememberToken();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
        });

        Schema::table('detailaddresses', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailaddresses');
    }
}
