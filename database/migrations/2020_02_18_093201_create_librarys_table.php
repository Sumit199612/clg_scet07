<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrarysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('librarys', function (Blueprint $table) {
            $table->Increments('l_id');
            $table->integer('prof_id')->unsigned();
            $table->integer('dept_id')->unsigned();
            $table->string('l_name');
            $table->string('email');
            $table->integer('extension_no');
            $table->string('details');
            $table->string('profile');
            $table->foreign('prof_id')->references('prof_id')->on('professors');
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
        Schema::dropIfExists('librarys');
    }
}
