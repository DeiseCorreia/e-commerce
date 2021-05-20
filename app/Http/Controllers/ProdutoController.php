<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    
   public function index(Request $request){
       echo "Pagina Produto";
       $dta=[];

       return view("inicio",$dta);
    }

    public function categoria(Request $request){
       echo "categoria";
      $dta=[];

       return view("categoria",$dta);
    }
}
