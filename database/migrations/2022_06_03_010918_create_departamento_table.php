<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departamentos', function (Blueprint $table) {
           // $table->id();
           // $table->timestamps();

  //$table->integer('iddep')->unique();
  $table->increments('iddep')->unique();
  $table->timestamp('id_verified_at')->nullable();     
  $table->string('nombre');
  $table->rememberToken();
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
        Schema::dropIfExists('departamento');
    }
}