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
            $table->string('first_name', 50)->nullable();
            $table->string('last_name', 50)->nullable();
            $table->string('phone', 30)->nullable();
            $table->string('whatsapp', 30)->nullable();
            $table->string('avatar', 200)->nullable();
            $table->string('email')->unique();
            $table->string('user')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('token_reset')->nullable();
            $table->rememberToken();
            $table->timestamps();
            // foreing keys
            $table->unsignedBigInteger('user_state_id')->references('id')->on('user_states')->default(2);
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
