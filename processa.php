<?php

include 'db.php';

 

    
$tnome = $_POST['tnome'];

$tmensagem=$_POST['tmensagem'];

$query ="INSERT INTO  usuario (tnome,tmensagem) values ('$tnome','$tmensagem')";
 
mysqli_query($conexao,$query);




