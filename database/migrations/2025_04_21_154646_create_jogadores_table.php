<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jogadores', function (Blueprint $table) {
            $table->id(); // Chave primária
            $table->string('nome');
            $table->integer('idade');
            $table->string('posicao');
            $table->string('nacionalidade');
            $table->decimal('salario', 15, 2);
            $table->unsignedBigInteger('time_id'); // FK para times

            // Foreign Key
            $table->foreign('time_id')->references('id')->on('times')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jogadores');
    }
};