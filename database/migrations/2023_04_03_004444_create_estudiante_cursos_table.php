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
        Schema::create('estudiante_cursos', function (Blueprint $table) {
            $table->id();
            $table->string('Deuda');

            $table->string('observacion');

            $table->foreignId('cursos_id')
                ->nullable()
                ->constrained('cursos')
                ->cascadeOnDelete()
                ->nullOnDelete();

            $table->foreignId('estudiante_id')
                ->nullable()
                ->constrained('estudiantes')
                ->cascadeOnDelete()
                ->nullOnDelete();
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
        Schema::dropIfExists('estudiante_cursos');
    }
};
