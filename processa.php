<?php

include 'db.php';

 

    
$nome = $_POST['nome'];

$mensagem=$_POST['mensagem'];



$query ="Insert into  usuario (nome,mensagem) values ('$nome','$mensagem')";
 
mysqli_query($conexao,$query);




