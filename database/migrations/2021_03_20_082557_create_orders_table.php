<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order_number')->unique();
            $table->enum('status', ['pending', 'failed', 'completed'])->default('pending');
            $table->string('grand_total');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('address_id')->nullable()->default(0);
            $table->unsignedBigInteger('payment_id')->nullable()->default(0);
            $table->unsignedBigInteger('shipment_id')->nullable()->default(0);
            $table->unsignedBigInteger('is_buy_now')->nullable()->default(0);
            $table->string('notes')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
