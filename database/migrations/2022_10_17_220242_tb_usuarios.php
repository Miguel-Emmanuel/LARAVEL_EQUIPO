<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        schema::create('tb_usuarios', function (Blueprint $table){
            $table->bigincrements('id_usuario');
            $table->string('nombre', 50);
            $table->string('app', 50);
            $table->string('ap', 50)->nullable();
            $table->boolean('edad');
            $table->string('genero', 50);
            $table->text('foto')->nullable();
            $table->boolean('activo');
         
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
