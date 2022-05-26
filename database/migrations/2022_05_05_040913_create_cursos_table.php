<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('nombre',50);
            $table->string('subtitulo',50);
            $table->text('descripcion',100);
            $table->string('categoria',20);
            $table->string('docente',50);
            $table->integer('participante');
            $table->integer('gusta');
            $table->string('imagen');
            $table->string('fecha_inicio');
            $table->string('fecha_fin');
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
        Schema::dropIfExists('cursos');
    }
};
