<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
         //   $table->id();
           // $table->timestamps();

 //$table->integer('idtipodoc')->unique();
 $table->increments('idtipodoc')->unique();
  $table->string('nombredocumento'); 
 $table->timestamp('id_verified_at')->nullable();  
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
        Schema::dropIfExists('documento');
    }
}