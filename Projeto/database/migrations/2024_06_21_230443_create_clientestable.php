<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientestable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientestable', function (Blueprint $table) {
            $table->id();
            $table->string('Nome');
            $table->string('Telefone');
            $table->string('Cidade');
            $table->string('Produto');
            $table->string('Tipo de compra');
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
        Schema::dropIfExists('clientestable');
    }
}
