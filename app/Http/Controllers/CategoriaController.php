<?php

namespace App\Http\Controllers;
use App\Models\Categoria;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    //
    function index(){
        $lscat= Categoria::all();

        return view('categoria' , ['categorias'=>$lscat]);

    }
    public function show($id){//acontece aqui uma sobrecarga de metodos
        // echo "categoria";//se ele passou um id de categoria eu procuro um id
         $dta=[];
         
         //select * from categorias
         //$lscat= Categoria::all();
        //select * from produtos limit 4
        $queryprod = Categoria::limit(4)->where("categoria_id", $id)->get();

        /*if($idcategoria != 0){
          //where categoria_id = $idcategoria;
          $queryprod->where("categoria_id", $idcategoria);
         }*/

        //$lsprod = $queryprod->get();//

        $dta['list'] = $querycate;
        //$dta['listcategoria'] =  $lscat;

        return view("categoriaproduto", $dta);
    }

}
