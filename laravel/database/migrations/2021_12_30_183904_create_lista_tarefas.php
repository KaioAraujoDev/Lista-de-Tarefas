<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListaTarefas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_tarefas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->timestamps();
            $table->string('descricao',100);
            $table->integer('categoria');

            //constraint
            $table->foreign('users_id')->references('id')->on('user');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_tarefas');
    }
}
