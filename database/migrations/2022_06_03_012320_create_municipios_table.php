<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipios', function (Blueprint $table) {
    

   //$table->integer('idmuni')->unique();
   $table->increments('idmuni')->unique();
   $table->integer('iddepartamento')->unsigned(); 
   $table->string('nombre');   
   $table->timestamp('id_verified_at')->nullable(); 
   $table->rememberToken();
   $table->timestamps();
   $table->foreign('iddepartamento')->references('iddep')->on('departamentos')->onUpdate('cascade')->onDelete('cascade');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municipios');
    }
}
