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
            $table->text('productdescription');
            $table->string('sku');
            $table->integer('productprice');
            $table->string('productsize');
            $table->integer('productquantity');
            $table->string('productimage');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreign('categoryid')->references('id')->on('categorys')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('brandid')->references('id')->on('brands')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('gender_id')->references('id')->on('genders')->onUpdate('CASCADE')->onDelete('CASCADE');
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
