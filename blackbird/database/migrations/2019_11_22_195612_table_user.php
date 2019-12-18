<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table)
        {
          $table->increments('id');
          $table->string('nombre');
          $table->string('apellido');
          $table->string('email');
          $table->string('password');
          $table->string('pais');
          $table->date('date');
          $table->string('avatar');
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
      Schema::drop('users');
    }
}
