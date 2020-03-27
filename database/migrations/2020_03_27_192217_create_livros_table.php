<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text("idusuario");
            $table->text("titulo");
            $table->text("autor");
            $table->text("ano");
            $table->text("edicao");
            $table->text("editora");
            $table->text("isbn");
            $table->text("numpaginas");
            $table->text("quantidade");
            $table->text("disponibilidade");
            $table->text("descritem");
            $table->text("fotoitem");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livros');
    }
}
