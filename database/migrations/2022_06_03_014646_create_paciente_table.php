<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
          

            $table->increments('idpaciente')->unique();
            
            $table->integer('documento'); 
            $table->string('nombre1'); 
            $table->string('nombre2'); 
            $table->string('apellido1'); 
            $table->string('apellido2'); 
            $table->timestamp('id_verified_at')->nullable();
            
            $table->integer('tipodocumento')->unsigned();  
            $table->integer('genero')->unsigned();   
            $table->integer('departamento')->unsigned(); 
            $table->integer('municipio')->unsigned(); 
             //$table->timestamp('id_verified_at')->nullable();
     $table->rememberToken();
     $table->timestamps();


           $table->foreign('tipodocumento')->references('idtipodoc')->on('documentos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('genero')->references('idgenero')->on('generos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('departamento')->references('iddep')->on('departamentos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('municipio')->references('idmuni')->on('municipios')->onUpdate('cascade')->onDelete('cascade');

          /* $table->foreign('tipodocumento')->references('idtipodoc')->on('documento');
            $table->foreign('genero')->references('idgenero')->on('genero');
            $table->foreign('departamento')->references('iddep')->on('departamento');
            $table->foreign('municipio')->references('idmuni')->on('municipios');
            */
           



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paciente');
    }
}
