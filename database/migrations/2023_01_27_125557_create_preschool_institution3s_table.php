<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreschoolInstitution3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preschool_institution3s', function (Blueprint $table) {
            $table->bigIncrements('id');          
            $table->string('number', 50);
            $table->string('full_name', 60);
            $table->string('post', 50);
            $table->string('education',50);
            $table->string('category', 50);
            $table->string('teaching_experience', 50);
            $table->string('professional_development', 75);
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
        Schema::dropIfExists('preschool_institution3s');
    }
}
