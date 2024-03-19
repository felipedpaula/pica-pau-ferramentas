<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestaquesTable extends Migration
{
    public function up()
    {
        Schema::create('destaques', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categoria_id')->constrained('destaques_categorias')->unsigned();
            $table->string('titulo');
            $table->string('subtitulo')->nullable();
            $table->text('texto')->nullable();
            $table->string('url_link')->nullable();
            $table->string('texto_link')->nullable();
            $table->string('img_src')->nullable();
            $table->string('background')->nullable();
            $table->dateTime('data_inicio')->nullable();
            $table->dateTime('data_fim')->nullable();
            $table->integer('ordem')->default(0);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('destaques');
    }
}
