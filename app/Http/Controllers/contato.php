<?php include "inicio.blade.php"
    $txtnome ="";
    $txtemail="";
    if(isset($_POST['nome']) && isset($_POST['email'])){
       $txtnome =$_POST['nome'];
        $txtemail=$_POST['email'];
    }
    

?>