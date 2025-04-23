<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('times', function (Blueprint $table) {
            $table->id(); // ID como chave primária (auto incremento)
            $table->string('nome');
            $table->string('cidade');
            $table->year('ano_fundacao');
            $table->integer('num_titulos');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('times');
    }
};