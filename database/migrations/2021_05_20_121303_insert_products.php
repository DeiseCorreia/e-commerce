<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()//
    {
        //
        $cate = new \App\Models\Categoria(['categoria' => 'Geral']);
        $cate->save();//salvando a categoria

        //$produto = new \App\Models\Produto(['nome' => '','valor']);
        //adicionando no bd
        $produto = new \App\Models\Produto(['nome' => 'Celular 01','valor' => 10, 
        'foto' => 'imagens/telefone.jpg', 'descricao' => '', 'categoria_id' => $cate->id]);//insert produto no bd
        $produto->save();//salvando o produto que está sendo inserido

        $produto = new \App\Models\Produto(['nome' => 'Computador 01','valor' => 10, 
        'foto' => 'imagens/computador.jpg', 'descricao' => '', 'categoria_id' => $cate->id]);//insert produto no bd
        $produto->save();

        $produto = new \App\Models\Produto(['nome' => 'Celular 02','valor' => 10, 'foto' => 'imagens/telefone2.jpg', 'descricao' => '', 'categoria_id' => $cate->id]);//insert produto no bd
        $produto->save();
        
        //$produto = new \App\Models\Produto(['nome' => '','valor']);
        $produto = new \App\Models\Produto(['nome' => 'Celular 03','valor' => 10, 
        'foto' => 'imagens/telefone2.jpg', 'descricao' => '', 'categoria_id' => $cate->id]);//insert produto no bd
        $produto->save();//salvando o produto que está sendo inserido
        
        //$produto = new \App\Models\Produto(['nome' => '','valor']);
        $produto = new \App\Models\Produto(['nome' => 'Celular 04','valor' => 10, 
        'foto' => 'imagens/telefone2.jpg', 'descricao' => '', 'categoria_id' => $cate->id]);//insert produto no bd
        $produto->save();
        
        //categoria_id;//chave estrangeira
       // string descricao ;
        //string foto;

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()//reverte tudo
    {
        //
    }
}
