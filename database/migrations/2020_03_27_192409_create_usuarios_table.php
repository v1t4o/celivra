<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text("email");
            $table->text("nomeusuario");
            $table->text("senha");
            $table->text("nome");
            $table->text("sobrenome");
            $table->text("endereco");
            $table->text("bairro");
            $table->text("cidade");
            $table->text("estado");
            $table->text("complemento");
            $table->text("datanasc");
            $table->text("sexo");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
