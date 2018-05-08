<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('identity_number')->unique()->nullable();
            $table->string('name');
            $table->enum('gender',['male','female'])->nullable();
            $table->text('address')->nullable();
            $table->string('phone_number',15);
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('user_type',['User','System Administrator']);
            $table->enum('status',['active','non-active'])->default('active');
            $table->string('last_login')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
