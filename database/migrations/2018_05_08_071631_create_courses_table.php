<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lecturer_id')->unsigned()->nullable();
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->string('key')->nullable();
            $table->integer('semester',2)->nullable();
            $table->text('description')->nullable();
            $table->enum('status',['active','non-active'])->default('active');
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
        Schema::dropIfExists('courses');
    }
}
