<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExaminationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examinations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('age');
            $table->integer('cp');
            $table->integer('trestbps');
            $table->integer('chol');
            $table->boolean('fbs');
            $table->integer('restecg');
            $table->integer('thalach');
            $table->boolean('exang');
            $table->float('oldPeak');
            $table->integer('slope');
            $table->integer('ca');
            $table->integer('thal');
            $table->boolean('prediction');
            $table->boolean('doctorAnalysis')->nullable();
            $table->text('feedback')->nullable();
            $table->bigInteger('patient_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('examinations');
    }
}
