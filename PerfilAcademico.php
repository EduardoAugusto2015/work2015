<!DOCTYPE html>
<html lang="pr-BR">
<head>
    <meta charset="UTF-8"/>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="ModeloHome/img/logoSite.png">
    <title>EasyWork</title>
    <link href="ModeloPerfilAcademico/css/bootstrap.min.css" rel="stylesheet">
    <link href="ModeloPerfilAcademico/css/bootstrap-theme.css" rel="stylesheet">
    <link href="ModeloPerfilAcademico/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="ModeloPerfilAcademico/css/font-awesome.min.css" rel="stylesheet" />
    <link href="ModeloPerfilAcademico/css/style.css" rel="stylesheet">
    <link href="ModeloPerfilAcademico/css/style-responsive.css" rel="stylesheet" />
    <style type="text/css"> body,td,th {font-family: Lato, sans-serif;font-size: 9px;}</style>
    <HTML5 shim and Respond.js IE8 support of HTML5>
    <script src="ModeloPerfilAcademico/js/html5shiv.js"></script>
    <script src="ModeloPerfilAcademico/js/respond.min.js"></script>
    <script src="ModeloPerfilAcademico/js/lte-ie7.js"></script>

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
          <h1>Márilia Vilas Boas</h1> 
        </div>

        <ul class="nav nav-pills nav-stacked">
          <li><a href="Perfil.php"> <i class="fa fa-paper-plane"></i> Postagens</a></li>
          <li><a href="Perfil.php"> <i class="fa fa-users"></i> Contatos</a></li>
          <li><a href="PerfilPortfolio.php"> <i class="fa fa-picture-o"></i> Portfólio</a></li>
          <li><a href="PerfilReputacao.php"> <i class="fa fa-star"></i> Reputação</a></li>
          <li><a href="Perfilacademico.php"> <i class="fa fa-graduation-cap"></i> Acadêmico</a></li>
          <li><a href="Perfileditarperfil.php"> <i class="fa fa-wrench"></i> Editar Perfil</a></li>
        </ul> 
        
      </div>
     </div>
     
     
     

        <div class="profile-info col-md-8">
           <div class="panel"> 
           
    
           <img src="ModeloPerfilAcademico/img/capa.png" alt=""> 
           <p>
           </p>
           <div class="panel">
                  <div class="panel-body bio-graph-info">
                      <h1>Informações</h1>
                      <div class="row">
                          <div class="bio-row">
                              <p><span>Nome:</span>Márilia</p>
                          </div>
                          <div class="bio-row">
                              <p><span>Sobrenome:</span>Vilas Boas</p>
                          </div>
                          <div class="bio-row">
                              <p><span>Data de nascimento:</span>: -/-/-</p>
                          </div>
                          <div class="bio-row">
                              <p><span>Telefone:</span>()3700-0000</p>
                          </div>
                          <div class="bio-row">
                              <p><span>País:</span>Brasil</p>
                          </div>
                          <div class="bio-row">
                              <p><span>Estado:</span>Minas Gerais</p>
                          </div>
                          <div class="bio-row">
                              <p><span>Cidade:</span>Poços de Caldas</p>
                          </div>
                          <div class="bio-row">
                              <p><span>Endereço:</span>Bairro Azaléias, lucia sacoman Nº20</p>
                          </div>
                          <div class="bio-row">
                              <p><span>Escolaridade:</span>Superior</p>
                          </div>
                          <div class="bio-row">
                              <p><span>Formação:</span>Análise e desenvolvimento de sistemas</p>
                          </div>
                          <div class="bio-row">
                              <p><span>Instituição:</span>Unifeob</p>
                          </div>
                          <div class="bio-row">
                              <p><span>Experiência Profissional:</span>Html, css, php, java</p>
                          </div>
                      </div>
                  </div>
              </div>    
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

<script src="ModeloPerfilAcademico/js/bootstrap.min.js"></script>
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
