@extends('inicio')
@section('conteudo')
 <h2>Categoria</h2>

 @foreach($list as $prod)
         <li>{{ $prod->nome}}</li>
         <li>{{ $prod->valor}}</li>
@endforeach

{{--
 @if(isset($querycate) && count($querycate) > 0)
      <ul>
         @foreach($querycate as $prod)

            <li>{{ $lscate->prod }}</li></br>
         @endforeach
      </ul>
 @endif

 @if(isset($querycate) && count($querycate) > 0)
      <ul>
         @foreach($querycate as $lscate)
            <li>{{ $lscate->nome}}</li>
            
         @endforeach
      </ul>

 @endif
 --}}
 <!--<select >
 <option>-</option>
    <option>Eletrônicos</option>
    <option>Celulares</option>
    <option>Celulares</option>
    <option>Celulares</option>
 </select>-->
@endsection 