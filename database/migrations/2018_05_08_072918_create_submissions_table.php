<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned()->nullable();
            $table->integer('exam_id')->unsigned()->nullable();
            $table->integer('task_id')->unsigned()->nullable();
            $table->string('source_dir')->nullable();
            $table->text('source_file')->nullable();
            $table->enum('source_lang',['java','c++','c','c#'])->nullable();
            $table->string('notes')->nullable();
            $table->decimal('value',8,3)->nullable();
            $table->decimal('plagiat_percentage',8,3)->nullable();
            $table->decimal('plagiat_treshold',8,3)->nullable();
            $table->integer('minimum_match_length')->nullable();
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
        Schema::dropIfExists('submissions');
    }
}
