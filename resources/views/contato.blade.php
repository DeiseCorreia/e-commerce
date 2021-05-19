

 @extends('inicio')
@section('conteudo')
<h1>Contato:</h1>
    <form  method="post">
        Nome:<input  placeholder="Digite seu nome:"type="text"></br>
        Email:<input placeholder="Digite seu email:"type="text"></br>
        Mensagem:<textarea >Deixe aqui sua Mensagem</textarea></br>
        <input type="submit">
    
    </form>
@endsection 

<?php 
    //$txtnome ="";
    //$txtemail="";
    //if(isset($_POST['nome']) && isset($_POST['email'])){
      //  $txtnome =$_POST['nome'];
        // $txtemail=$_POST['email'];
    //}
    

?>
