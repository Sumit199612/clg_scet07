<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professors', function (Blueprint $table) {
            $table->increments('prof_id');
			$table->integer('dept_id')->unsigned();
            $table->string('fname');
            $table->string('lname');
            $table->string('Qualification');
            $table->string('dob');
            $table->string('gender');
            $table->string('position');
            $table->string('area_interest');
            $table->string('exprience');
            $table->string('phone');
            $table->string('email');
            $table->string('url');
            $table->string('proflie');
			$table->foreign('dept_id')->references('dept_id')->on('departments');
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
        Schema::dropIfExists('professors');
    }
}
