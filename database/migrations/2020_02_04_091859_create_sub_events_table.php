<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_events', function (Blueprint $table) {
            $table->Increments('se_id');
            $table->integer('e_id')->unsigned();
            $table->integer('dept_id')->unsigned();
            $table->string('se_name');
            $table->string('details');
            $table->string('profile');
            $table->foreign('e_id')->references('e_id')->on('events');
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
        Schema::dropIfExists('sub_events');
    }
}
