<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" >
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
img {
    /* width:92px; */
    float: left;
  margin-left:20px;
 
}
.carrinho{
    width:32px;
}
.rodape{
    text-align:center;
    font-family:arial;
}

.card{
    width:360px;
   align-itens:center;
    

}
.card-img-top{
    display: inline-block;
    width: 150px;
}


</style>
</head>
<body>

    <nav class="navbar navbar-light navbar-expand-md bg-light p1-5  pr-5  mb-5 ">
    <link rel="shortcut icon" href="imagens/.favicon.ico" >
        <a href="/" class="navbar-brand">.Net Eletronics </a>
        <div class="collapse navbar-collapse"></br>
            <div class="navbar-nav">
                <ul>
                    <li><a class="nav-link" href="{{ route('produtos.index') }}">Home </a></li>
                    <li><a class="nav-link" href="{{ route('categorias.index') }}">Categoria</a></li>
                    <li><a class="nav-link" href="{{ route('cadastro') }}">Cliente</a></li>
                     <li><a class="nav-link" href="{{ route('contato') }}">Contato</a></li>
                    
                    <!--criar uma li para produtos-->
                     <!--<li><a class="nav-link">Produtos</a></li> -->
                </ul>
            </div>
        </div>
        <a alt="carrinho" href="#" class="btn btn-sm"><i class="fa fa-shopping-cart">
            <img class="carrinho" alt ="carrinho" src="imagens/carrinho.png">
        </a> 
    </nav>
    <div class="container">
        
    
    </div>
        
    @yield('conteudo')
    <div class="rodape">
     <!-- @Net Eletronics - Deise Correia -->
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> 
</body>
</html>