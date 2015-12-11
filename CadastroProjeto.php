<!DOCTYPE html>
<html lang="pr-BR">
<head>
    <meta charset="UTF-8"/>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="ModeloHome/img/logoSite.png">
    <title>EasyWork</title>
    <link href="ModeloCadastroDeProjeto/css/bootstrap.min.css" rel="stylesheet">
    <link href="ModeloCadastroDeProjeto/css/bootstrap-theme.css" rel="stylesheet">
    <link href="ModeloCadastroDeProjeto/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="ModeloCadastroDeProjeto/css/font-awesome.min.css" rel="stylesheet" />
    <link href="ModeloCadastroDeProjeto/css/style.css" rel="stylesheet">
    <link href="ModeloCadastroDeProjeto/css/style-responsive.css" rel="stylesheet" />
    <style type="text/css"> body,td,th {font-family: Lato, sans-serif;font-size: 9px;}</style>
    <HTML5 shim and Respond.js IE8 support of HTML5>
    <script src="ModeloCadastroDeProjeto/js/html5shiv.js"></script>
    <script src="ModeloCadastroDeProjeto/js/respond.min.js"></script>
    <script src="ModeloCadastroDeProjeto/js/lte-ie7.js"></script>

    <link type="text/css" rel="stylesheet" id="arrowchat_css" media="all" href="/webeasywork/Arrowchat/external.php?type=css" charset="utf-8" />
<script type="text/javascript" src="/webeasywork/Arrowchat/includes/js/jquery.js"></script>
<script type="text/javascript" src="/webeasywork/Arrowchat/includes/js/jquery-ui.js"></script>
</head>
<body>

<?php
     include("BarraNavegacao.php") 
?>   

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
          <li><a href="Perfil.php"> <i class="fa fa-user"></i> Perfil</a></li>
          <li><a href="#"> <i class="fa fa-users"></i> Contatos</a></li>
          <li><a href="ProjetosEmAndamento.php"> <i class="fa fa-edit"></i> Projetos em andamento</a></li>
        </ul> 
        
      </div>
     </div>
      

     <form="cadastroProjetos" action="cadastrando_projetos"> 
        <h3>Preencha os dados abaixo para cadastrar um projeto</h3>

        Categoria: <input ="text" name="categoria">

     </form>  
<script type="text/javascript" src="/webeasywork/arrowchat/external.php?type=djs" charset="utf-8"></script>
<script type="text/javascript" src="/webeasywork/arrowchat/external.php?type=js" charset="utf-8"></script>




<script language="javascript">

function get_user_id() 

$_COOKIE["coid"];
{
  $userid = NULL;
  
  if (!empty($_COOKIE['coid']))
  {
    $userid = $_COOKIE['coid'];
  }

  return $userid;
}
</script>
</body>
</html>
