<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
   
   public function cadastro(Request $request){
      //echo "Pagina Cliente";
      $dta=[];

       return view("inicio",$dta);//é tipo como eu colocasse um include,no caso seria para incluir essa função que está sendo executada na pagina inicial,no
       //caso a de inicio
   }

   
}


