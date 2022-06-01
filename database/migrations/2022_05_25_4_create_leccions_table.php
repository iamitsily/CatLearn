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
        Schema::create('leccions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_curso')->nullable()->constrained('cursos')->cascadeOnUpdate()->nullOnDelete();
            $table->string('nombre',50);
            $table->foreignId('id_tarea')->nullable()->constrained('tareas')->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('id_examen')->nullable()->constrained('examens')->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('id_actividad')->nullable()->constrained('actividads')->cascadeOnUpdate()->nullOnDelete();
            $table->text('informacion');
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
        Schema::dropIfExists('leccions');
    }
};
