<?php
$servidor = "localhost";
$usuario ="root";
$senha"";
$db = "faleconosco";

$conexao = mysqli_connect($servidor,$usuario,$senha,$db);



$query = "select * from  usuario ORDER BY id desc";

$consultas = mysqli_query($conexao,$query);





?>