<!DOCTYPE html>
<html lang="pr-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="ModeloHome/img/logoSite.png">
    <title>EasyWork</title>
    <link href="ModeloProjetos/css/bootstrap.min.css" rel="stylesheet">
    <link href="ModeloProjetos/css/bootstrap-theme.css" rel="stylesheet">
    <link href="ModeloProjetos/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="ModeloProjetos/css/font-awesome.min.css" rel="stylesheet" />
    <link href="ModeloProjetos/css/style.css" rel="stylesheet">
    <link href="ModeloProjetos/css/style-responsive.css" rel="stylesheet" />
    <style type="text/css"> body,td,th {font-family: Lato, sans-serif;font-size: 9px;}</style>
    <HTML5 shim and Respond.js IE8 support of HTML5>
    <script src="ModeloProjetos/js/html5shiv.js"></script>
    <script src="ModeloProjetos/js/respond.min.js"></script>
    <script src="ModeloProjetos/js/lte-ie7.js"></script>
</head>
<body>


<?php include("barraNavegacao.php") ?>   


<div class="col-md-10 no-paddin-xs">
  <div class="row"> 
    <div class="profile-nav col-md-4"> 
      <div class="panel"> 
        <div class="user-heading round"> <a href="#"> 
          <img src="ModeloFeed/img/perfil.png" alt=""> </a> 
          <h1>

          <?php  
      
      $nome= $_COOKIE["conome"];
      $sobrenome= $_COOKIE["cosobrenome"];      
      echo "<h3>" . $nome . " " . $sobrenome . "<h3>";
      
      ?> 

          </h1> 



        </div>

        <ul class="nav nav-pills nav-stacked">
          <li><a href="perfil.php"> <i class="fa fa-user"></i> Perfil</a></li>
          <li><a href="#"> <i class="fa fa-users"></i> Contatos</a></li>
          <li><a href="ProjetosEmAndamento.php"> <i class="fa fa-edit"></i> Projetos em andamento</a></li>
        </ul> 
        
      </div>
     </div>


          <h3><center><font color="#0066CC"><b> Publique um projeto e encontre o profissional que procura!</b></font></center></h3>


          <center><font size="4"><a href="CadastroProjeto.php"><i class="fa fa-clipboard"></i> Clique aqui para cadastrar!</a></font></center>






</body>
</html>
