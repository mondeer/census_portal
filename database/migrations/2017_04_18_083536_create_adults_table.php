<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdultsTable extends Migration
{

    public function up()
    {
        Schema::create('adults', function (Blueprint $table) {
            $table->increments('id');
            $table->string('birthcert')->unique();
            $table->integer('national_id')->unique();
            $table->string('f_name');
            $table->string('m_name');
            $table->string('l_name');
            $table->string('district_of_birth');
            $table->string('constituency');
            $table->string('ward');
            $table->string('location');
            $table->date('dob');
            $table->string('gender');
            $table->string('name_of_father');
            $table->string('name_of_mother');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('adults');
    }
}
