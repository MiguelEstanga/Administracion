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
        Schema::create('profesor_cursos', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('curso_id')
                ->nullable()
                ->constrained('cursos')
                ->cascadeOnDelete()
                ->nullOnDelete();

            $table->foreignId('profesore_id')
                ->nullable()
                ->constrained('users')
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
        Schema::dropIfExists('profesor_cursos');
    }
};
