 @extends('inicio')
@section('conteudo')
 <h2>Categoria</h2>


 @foreach($categorias as $cat)
         <li>{{ $cat->id}}</li>
         <li><a href="{{ route('categorias.show' , "$cat->id") }}">{{ $cat->categoria}}</a></li>
@endforeach
@if(isset($queryprod) && count($queryprod) > 0)
      <ul>
         @foreach($queryprod as $cate)

            <li>{{ $cate->categoria }}</li></br>
         @endforeach
      </ul>
 @endif

 @if(isset($queryprod) && count($queryprod) > 0)
      <ul>
         @foreach($queryprod as $prod)
            <li>{{ $prod->nome}}</li>
            
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
