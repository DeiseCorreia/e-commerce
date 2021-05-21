@extends('inicio')
@section('conteudo')


@if(isset($produtos))
    
    @foreach($produtos as $prod)
    <div class="container">
        <div class="col -3 mb-3">
                    <div class="card">
                        <img alt="img-celular"src="{{ asset($prod->foto)}}" class="card-img-top"/>
                        <div class="card-body">
                            <h6 class="card-title">{{$prod->nome}} - R$ {{$prod->valor}} - 
                            {{$prod->descricao}}</h6>
                            <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a><!--em breve add-->
                        </div>
                    </div>
        </div>
    </div>
        
    @endforeach
@endif 
   <!--<div class="container">-->
         <!--identado(essa parte,por enquanto) -->
         <!--<div class="col -3 mb-3">
             <div class="card"> 
                <img alt="img-computador"src="{{ asset('imagens/computador.jpg') }}" class="card-img-top"/>
                <h6 class="card-title">Computador 01</h6>
                <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
            </div>
        </div>
    </div>-->
    <!-- <div class="container"> 

        <div class="col -3 mb-3">
            <div class="card">
                <img alt="img-celular2"src="{{ asset('imagens/telefone2.jpg') }}" class="card-img-top"/>
                <h6 class="card-title">Celular 02</h6>
                <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
            </div>
        </div>
    </div>
    <div class="container">
        
        <div class="col -3 mb-3">
            <div class="card">
                <img alt="img-celular2"src="{{ asset('imagens/telefone2.jpg') }}" class="card-img-top"/>
                <h6 class="card-title">Celular 03</h6>
                <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
            </div>
        </div>
    </div>
    <div class="container">
        
        <div class="col -3 mb-3">
            <div class="card">
                <img alt="img-celular2"src="{{ asset('imagens/telefone2.jpg') }}" class="card-img-top"/>
                <h6 class="card-title">Celular 04</h6>
                <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
            </div>
        </div>
    </div>
    @endsection