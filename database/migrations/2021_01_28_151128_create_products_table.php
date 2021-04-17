<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('products');
        Schema::create('products', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->bigInteger('categoryid')->unsigned();
            $table->bigInteger('brandid')->unsigned();
            $table->bigInteger('gender_id')->unsigned();
            $table->bigInteger('image_detail_id')->unsigned()->nullable();
            $table->string('productname');
            $table->string('productdescription');
            $table->string('productprice');
            $table->string('productsize');
            $table->string('productquantity');
            $table->string('productimage');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreign('categoryid')->references('id')->on('categorys')->onDelete('cascade');
            $table->foreign('brandid')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
