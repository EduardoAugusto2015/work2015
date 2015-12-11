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
    <link href="ModeloPerfil/css/bootstrap.min.css" rel="stylesheet">
    <link href="ModeloPerfil/css/bootstrap-theme.css" rel="stylesheet">
    <link href="ModeloPerfil/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="ModeloPerfil/css/font-awesome.min.css" rel="stylesheet" />
    <link href="ModeloPerfil/css/style.css" rel="stylesheet">
    <link href="ModeloPerfil/css/style-responsive.css" rel="stylesheet" />
    <style type="text/css"> body,td,th {font-family: Lato, sans-serif;font-size: 9px;}</style>
    <HTML5 shim and Respond.js IE8 support of HTML5>
    <script src="ModeloPerfil/js/html5shiv.js"></script>
    <script src="ModeloPerfil/js/respond.min.js"></script>
    <script src="ModeloPerfil/js/lte-ie7.js"></script>

<link type="text/css" rel="stylesheet" id="arrowchat_css" media="all" href="/webeasywork/Arrowchat/external.php?type=css" charset="utf-8" />
<script type="text/javascript" src="/webeasywork/Arrowchat/includes/js/jquery.js"></script>
<script type="text/javascript" src="/webeasywork/Arrowchat/includes/js/jquery-ui.js"></script>

</head>
<body>
<?php include("BarraNavegacao.php") ?>



<div class="col-md-10 no-paddin-xs">
  <div class="row"> 
    <div class="profile-nav col-md-4"> 
      <div class="panel"> 
        <div class="user-heading round"> <a href="#"> 
          <img src="ModeloPerfil/img/perfil.png" alt=""> </a> 
          
          <?php  
		  
		  $nome= $_COOKIE["conome"];
		  $sobrenome= $_COOKIE["cosobrenome"];		  
		  echo "<h3>" . $nome . " " . $sobrenome . "<h3>";
		  
		  ?> 
          
          
          
          
        </div>

        <ul class="nav nav-pills nav-stacked">
          <li><a href="perfil.php"> <i class="fa fa-paper-plane"></i> Postagens</a></li>
          <li><a href="#"> <i class="fa fa-users"></i> Contatos</a></li>
          <li><a href="PerfilPortfolio.php"> <i class="fa fa-picture-o"></i> Portfólio</a></li>
          <li><a href="PerfilReputacao.php"> <i class="fa fa-star"></i> Reputação</a></li>
          <li><a href="perfilacademico.php"> <i class="fa fa-graduation-cap"></i> Acadêmico</a></li>
          <li><a href="perfileditarperfil.php"> <i class="fa fa-wrench"></i> Editar Perfil</a></li>
        </ul> 
        
      </div>
     </div>

        <div class="profile-info col-md-8">
           <div class="panel"> 
           
    

        
           <img src="ModeloPerfil/img/capa.png" alt=""> 
              <form id="form" name="postagem" method="post" action="PostandoPerfil.php">
                 <h4><font color="#0066CC"><b>Como foi seu dia de trabalho? </b></font></h4>
                 <div class="form-group" style="padding:14px;">
                 	<textarea name="msg" class="form-control" placeholder="Compartilhe experiências"></textarea> 
                 </div>
                	<button type="submit" class="btn btn-primary pull-right" >Compartilhar</button>
                      <ul class="nav nav-pills"> 
                          <li><a href="#"><i class="fa fa-camera-retro fa-3x"></i></a> </li>
                      </ul>
              </form>           
            </div>
          </div>
     </div>
    </div>
  </div>
</div>


<script type="text/javascript" src="/webeasywork/arrowchat/external.php?type=djs" charset="utf-8"></script>
<script type="text/javascript" src="/webeasywork/arrowchat/external.php?type=js" charset="utf-8"></script>
<script src="ModeloPerfil/js/bootstrap.min.js"></script>

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
