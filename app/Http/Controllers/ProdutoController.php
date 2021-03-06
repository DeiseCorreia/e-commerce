<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Produto;

class ProdutoController extends Controller
{
    
   public function index(){
      // echo "Pagina Produto";
          $dta = [];

          //busca de todos od prod
          $lsprod = Produto::all();//consultando todos os produtos do bd

          //basicamente seria um select * from produtos
          $dta['list'] = $lsprod; //dando um retorno para dentro do array $dta
          return view('produtos' , ['produtos'=> $lsprod]);

         // return view("inicio",$dta);
    }

    public function show($id){//acontece aqui uma sobrecarga de metodos
        // echo "categoria";//se ele passou um id de categoria eu procuro um id
         $dta=[];
         
         //select * from categorias
         //$lscat= Categoria::all();
        //select * from produtos limit 4
        $queryprod = Produto::limit(4)->where("categoria_id", $id)->get();

        /*if($idcategoria != 0){
          //where categoria_id = $idcategoria;
          $queryprod->where("categoria_id", $idcategoria);
         }*/

        //$lsprod = $queryprod->get();//

        $dta['list'] = $queryprod;
        //$dta['listcategoria'] =  $lscat;

        return view("categoriaproduto", $dta);
    }
}
