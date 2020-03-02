<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAchivementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achivements', function (Blueprint $table) {
            $table->Increments('Achivement_id');
			$table->integer('dept_id')->unsigned();
            $table->integer('prof_id')->unsigned();
			$table->string('Activty_Type');
			$table->string('Add_Details');
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
        Schema::dropIfExists('achivements');
    }
}
