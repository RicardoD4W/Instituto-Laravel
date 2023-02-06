<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_subjects', function (Blueprint $table) {
            $table->unsignedBigInteger('id_student');
            $table->unsignedBigInteger('id_subject');
            $table->date('date_eval');
            $table->double('note');

            $table->primary(['id_student','id_subject']);

            $table->foreign('id_student')->references('id')->on('students')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_subject')->references('id')->on('subjects')->onUpdate('cascade')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students_subjects');
    }
};
