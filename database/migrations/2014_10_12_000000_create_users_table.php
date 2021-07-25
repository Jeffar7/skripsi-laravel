<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->string('username')->nullable();
            $table->string('gender')->nullable();
            $table->string('DOB')->nullable();
            $table->string('password')->nullable();
            $table->string('provider_id')->nullable();
            // $table->string('notification_preference')->default('mail');
            $table->string('role');
            $table->string('address')->nullable();
            $table->string('site')->nullable();
            $table->text('about')->nullable();
            $table->string('picture')->nullable();
            $table->string('phone')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
