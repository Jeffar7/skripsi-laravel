<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentmethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymentmethods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('payment_type', ['debit', 'credit'])->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->enum('bank_name', ['BCA', 'BNI', 'MANDIRI', 'BRI'])->nullable();
            $table->enum('bank_type', ['M-Banking', 'BRIVA', 'VIRTUAL ACCOUNT'])->nullable();
            $table->string('account_number')->nullable();
            $table->string('card_number')->nullable();
            $table->string('cvv')->nullable();
            $table->enum('credit_type', ['VISA', 'MasterCard', 'AmericanExpress', 'Discover'])->nullable();
            $table->string('valid_until')->nullable();
            $table->string('user_id');
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
        Schema::dropIfExists('paymentmethods');
    }
}
