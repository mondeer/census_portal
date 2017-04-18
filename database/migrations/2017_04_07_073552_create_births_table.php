<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBirthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('births', function (Blueprint $table) {
            $table->increments('id');
            $table->string('birthcert');
            $table->string('f_name');
            $table->string('m_name');
            $table->string('l_name');
            $table->string('district_of_birth');
            $table->string('constituency');
            $table->string('location');
            $table->string('ward');
            $table->date('dob');
            $table->string('gender');
            $table->string('name_of_father');
            $table->string('name_of_mother');

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
        Schema::dropIfExists('births');
    }
}
