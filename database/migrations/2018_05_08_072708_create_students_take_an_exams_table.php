<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTakeAnExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_take_an_exams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('exam_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->time('start_at')->nullable();
            $table->time('finish_at')->nullable();
            $table->enum('grade',['A','B','C','D','E'])->nullable();
            $table->decimal('value',8,3)->nullable();
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
        Schema::dropIfExists('students_take_an_exams');
    }
}
