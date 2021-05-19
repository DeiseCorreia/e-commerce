
<?php include "inicio.blade.php"
    //$txtnome ="";
    //$txtemail="";
    //if(isset($_POST['nome']) && isset($_POST['email'])){
      //  $txtnome =$_POST['nome'];
        // $txtemail=$_POST['email'];
    //}
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    form{
        text-aligin:center;
    }
    </style>
</head>
<body>
    <h1>Contato:</h1>
    <form action="contato.blade.php" method="post">
        Nome:<input value="<?php ($txtnome);?>" placeholder="Digite seu nome:"type="text"></br>
        Email:<input value="<?php ($txtemail);?>"placeholder="Digite seu email:"type="text"></br>
        Mensagem:<textarea >Deixe aqui sua Mensagem</textarea></br>
        <input type="submit">
    
    </form>
 <!--<?php echo $txtnome;?>-->
</body>
</html>