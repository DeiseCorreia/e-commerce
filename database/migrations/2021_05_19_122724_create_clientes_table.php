<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {



            $table->increments('id');

            $table->string("login", 100)->unique();
            $table->string("senha", 255);
            $table->string("nome", 50); 
           

            // $table->integer("cliente-id")->unssigned();
            // $table->timestamps();
            // $table->foreign("cliente-id")
                    // ->references("id")->on("cliente")
                    // ->onDelete("cascade");
           
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
        Schema::dropIfExists('clientes');
    }
}
