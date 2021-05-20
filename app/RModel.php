<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RModel extends Model
{
   use HasFactory;


   protected $primaryKey = "id";
   public $timespatams =true; //criando e atualizando o _at

   public $incremeting = true;
   protected $fillable = [];


   public function beforeSave(){
       return true;//retorne verdadeiro
   }
   public function save(array $options = []){
      try{
          if(!this->beforeSave()){//se não existir
               return false; //retorne falso
          }

          return parent::save($options);

      }catch(\Exception $e){
          throw new \Exception($e->getMessage());
      }
   }
}
