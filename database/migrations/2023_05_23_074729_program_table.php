<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProgramTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_table', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('monday');
            $table->string('tuesday');
            $table->string('wednesday');
            $table->string('thursday');
            $table->string('friday');
            $table->string('saturday');
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
        //
    }
}
