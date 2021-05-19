<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.Net Eletronics - Ecommerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<style>
a{
    display: block;
    padding: 10px;
    color:black;
}
li {
  display: inline;
  float: left;
}

</style>
</head>
<body>

    <nav class="navbar navbar-light navbar-expand-md bg-light p1-5  pr-5  mb-5 ">
        <a href="#" class="navbar-brand">.Net Eletronics </a>
        <div class="collapse navbar-collapse"></br>
            <div class="navbar-nav">
                <ul>
                    <li><a href="inicio.blade.php">Home </a></li>
                    <li><a href="categoria.blade.php">Categoria </a></li>
                    <li><a href="cadastro.blade.php">Cadastro </a></li>
                    <li><a href="contato.blade.php">Contato</a></li>
                    <!--criar uma li para produtos-->
                </ul>
            </div>
        </div>
        <img alt ="carrinho"src="imagens/carrinho.png">
        <a alt="carro" href="#" class="btn btn-sm"><i class="fa fa-shopping-cart"></a>
    </nav>
    <div class="container">
        
        <div class="col -3 mb-3">
            <div class="card">
                <img alt="img-celular"src="{{!! asset('imagens/telefone.jpg')!!}}" class="card-img-top"/>
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
                <img alt="img-computador"src="{{ asset('imagens/computador.jpg')}}" class="card-img-top"/>
                <h6 class="card-title">Computador 01</h6>
                <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
            </div>
        </div>
    </div>
    <div class="container">
        
        <div class="col -3 mb-3">
            <div class="card">
                <img alt="img-celular2"src="{{ asset('imagens/telefone2.jpg')}}" class="card-img-top"/>
                <h6 class="card-title">Celular 02</h6>
                <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
            </div>
        </div>
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>