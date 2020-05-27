<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information_user', function (Blueprint $table) {
            $table->id('pk_infomation_id')->autoIncrement();
            $table->integer('Id');
            $table->string('c_name');
            $table->integer('c_sdt');
            $table->string('c_adress');
            $table->string('c_email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('information_user');
    }
}
