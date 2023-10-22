<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produtos_filiais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produto_id'); //chave primaria da tabela produtos
            $table->unsignedBigInteger('filial_id'); //chave primaria da tabela filiais
            $table->float('preco', 8, 2)->default(0.01);
            $table->integer('estoque-minimo')->default(1);
            $table->integer('estoque-maximo')->default(1);
            $table->timestamps();

             //chave estrangeira: produtos
            $table->foreign('produto_id')->references('id')->on('produtos'); 
            $table->unique('produto_id'); 

             //chave estrangeira: filiais
            $table->foreign('filial_id')->references('id')->on('filiais');
            $table->unique('filial_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos_filiais');
    }
};
