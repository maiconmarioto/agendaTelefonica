<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefones', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pessoa_id',false,true);
            $table->foreign('pessoa_id')->references('id')->on('pessoas')->onDelete('cascade');
            $table->string('descricao',50);
            $table->integer('codpais');
            $table->integer('ddd');
            $table->integer('prefixo');
            $table->integer('sufixo');
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
        Schema::drop('telefones');
    }
}
