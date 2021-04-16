<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressDeliveryUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_delivery_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('recipient_name');
            $table->string('contact_number');
            $table->string('address');
            $table->string('address_note')->nullable();
            $table->string('post_code');
            $table->string('province');
            $table->string('city');
            $table->string('district');
            $table->unsignedBigInteger('user_id');
            $table->softDeletes();
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
        Schema::dropIfExists('address_delivery_users');
    }
}
