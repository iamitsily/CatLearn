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
            //$table->foreignId('id_user')->nullable()->constrained('users')->cascadeOnUpdate()->nullOnDelete();
            //$table->foreignId('id_creador')->nullable()->constrained('users')->cascadeOnUpdate()->nullOnDelete();
            $table->bigInteger('id_user')->unsigned()->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onDelete("cascade");
            $table->bigInteger('id_creador')->unsigned();
            $table->foreign('id_creador')->references('id')->on('users')->onDelete("cascade");
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
