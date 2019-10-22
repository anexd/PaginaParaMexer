<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Processamento de imagem</title>
    
    <link rel="stylesheet" href="_css/estilo.css?id=<?php echo time(); ?>"type="text/css" >

    <link rel="stylesheet"   type="text/css"  href="_css/normalize.css"  >

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
  
<body>
  <header>  
    <nav class=" indigo" style="padding:0px 20px; position:fixed;">
      <div class="nav-wrapper">
        <a href="#" ></a>
        <a href="#" class="sidenav-trigger" data-target="mobile-nav">
          <i class="material-icons">menu</i>
        </a>
         <ul class="right hide-on-med-and-down ">
            <li> <a  href="?pagina=index"><p>Home</p></a></li>
            <li><a href="?pagina=estudos"><p>Aplicação</p></a></li>
            
            <li ><a  href="?pagina=fale-conosco"><p>Fale Conosco<p></a></li>
          </ul>
        </div>
    </nav>

<br>
    <ul class="sidenav  indigo" id="mobile-nav">
      <li > <a  href="?pagina=index"><p class="float-text">Home</p></a></li>
      <li><a href="?pagina=estudos"><p>Aplicação</p></a></li>
     
      <li ><a  href="?pagina=fale-conosco"><p>Fale Conosco</p></a></li>
    </ul>

    <script>
        $(document).ready(function() {
            $('.sidenav').sidenav();
        });
    </script>


<div id="container">
        <header id="cabecalho">

            <hgroup>
<br>

<div class="row container ">
     <div class="col s6 m8 ">
                <h1 class="flow-text ">Processamento de imagens</h1>
                <h2 class="flow-text " > Uma técnica interessante manipular imagens</h2>
      </div>          
      <div class="col s6 m4 ">
                <img class=" icone responsive-img" src="_imagens/image.png">
          
     <br>
      </div>
      </div>      
            </hgroup>
           
            
        </header>
<!--
            </hgroup>
           
            <img id="icone" src="_imagens/image.png"> 
 <hgroup>
                <h1>Processamento de imagens</h1>
                <h2> Uma técnica interessante manipular imagens</h2>
            </hgroup>
      -->

    


 
 

     
    

        