 @extends('inicio')
@section('conteudo')
 <h2>Categoria</h2>


 @if(isset($lscat) && count($lscat) > 0)
      <ul>
         @foreach($lscat as $cate)

            <li>{{ $categoria->categoria}}</li>
         @endforeach
      </ul>
 @endif

 @if(isset($list) && count($list) > 0)
      <ul>
         @foreach($list as $prod)
            <li>{{ $prod->nome}}</li>
            
         @endforeach
      </ul>

 @endif
 <select >
 <option>-</option>
    <option>Eletrônicos</option>
    <option>Celulares</option>
    <option>Celulares</option>
    <option>Celulares</option>
 </select>
@endsection 
