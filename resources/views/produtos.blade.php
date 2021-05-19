@extends('inicio')
@section('conteudo')
<div class="col -3 mb-3">
            <div class="card">
                <img alt="img-celular"src="{{ asset('imagens/telefone.jpg')}}" class="card-img-top"/>
                <div class="card-body">
                    <h6 class="card-title">Celular 01</h6>
                    <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        
        <div class="col -3 mb-3">
            <div class="card">
                <img alt="img-computador"src="{{ asset('imagens/computador.jpg') }}" class="card-img-top"/>
                <h6 class="card-title">Computador 01</h6>
                <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
            </div>
        </div>
    </div>
    <div class="container">

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
                <h6 class="card-title">Celular 02</h6>
                <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
            </div>
        </div>
    </div>
    <div class="container">
        
        <div class="col -3 mb-3">
            <div class="card">
                <img alt="img-celular2"src="{{ asset('imagens/telefone2.jpg') }}" class="card-img-top"/>
                <h6 class="card-title">Celular 02</h6>
                <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
            </div>
        </div>
    </div>
    @endsection