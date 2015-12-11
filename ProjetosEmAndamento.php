<?php 
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

$id= $_COOKIE["coid"];
?>

<!DOCTYPE html>
<html lang="pr-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="ModeloHome/img/logoSite.png">
    <title>Easywork</title>
    <link href="ModeloProjetosEmAndamento/css/bootstrap.min.css" rel="stylesheet">
    <link href="ModeloProjetosEmAndamento/css/bootstrap-theme.css" rel="stylesheet">
    <link href="ModeloProjetosEmAndamento/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="ModeloProjetosEmAndamento/css/font-awesome.min.css" rel="stylesheet" />
    <link href="ModeloProjetosEmAndamento/css/style.css" rel="stylesheet">
    <link href="ModeloProjetosEmAndamento/css/style-responsive.css" rel="stylesheet" />
    <style type="text/css"> body,td,th {font-family: Lato, sans-serif;font-size: 9px;}</style>
    <HTML5 shim and Respond.js IE8 support of HTML5>
    <script src="ModeloProjetosEmAndamento/js/html5shiv.js"></script>
    <script src="ModeloProjetosEmAndamento/js/respond.min.js"></script>
    <script src="ModeloProjetosEmAndamento/js/lte-ie7.js"></script>
</head>
<body>
<section id="container" class="">
<header class="header dark-bg">
  <div class="toggle-nav">
    <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom">
  </div>
</div>

<a class="navbar-brand" href=""><img src="ModeloHome/img/logoSite.png" alt=""> </a>

<div class="nav search-row" id="top_menu">
  <ul class="nav top-menu">                   
  <li>
    <form class="navbar-form">
    <input class="form-control" placeholder="Buscar, pessoas, empresas e projetos" type="text">
    </form>
  </li>                    
  </ul>        
</div>

<!--links da barra superior inicio--->     
<div class="nav search-row" id="top_menu">
  <ul class="nav top-menu">       
    <li><a href="feednoticia.php"><font color='#FFFFFF'><i class="fa fa-globe"></i>Notícias</font></a></li>      
    <li><a href="perfil.php"><font color='#FFFFFF'><i class="fa fa-user"></i>Perfil</font></a></li>       
    <li><a href="#"><font color='#FFFFFF'><i class="fa fa-archive"></i>Projetos</font></a></li>
    <li><a href="feednoticia.php"><font color='#FFFFFF' style="margin-left:400px"><i class="fa fa-power-off"></i>Sair</font></a></li>     
  </ul>  
</div>
   

<div class="top-nav notification-row">                

</div>
</header>      

<div class="row">
  <div class="col-lg-5">
    <div class="media">
      <a class="pull-left" href="#">
      </a>
      <div class="media-body"> 
      </div>
    </div>
  </div>
</div>

<!--links da barra superior fim--->
<!----Painel esquerdo inicio---> 

<div class="col-md-10 no-paddin-xs">
  <div class="row"> 
    <div class="profile-nav col-md-4"> 
      <div class="panel"> 
        <div class="user-heading round"> <a href="#"> 
          <img src="ModeloProjetosEmAndamento/img/perfil.png" alt=""> </a> 
          <h1>Márilia Vilas Boas</h1> 
        </div>

        <ul class="nav nav-pills nav-stacked">
          <li><a href="perfil.php"> <i class="fa fa-user"></i> Perfil</a></li>
          <li><a href="#"> <i class="fa fa-users"></i> Contatos</a></li>
          <li><a href="ProjetosEmAndamento.php"> <i class="fa fa-edit"></i> Projetos em andamento</a></li>
        </ul> 
        
      </div>
     </div>

        <div class="profile-info col-md-8">
           <div class="panel"> 
           
           <!---ínicio--->
        
 <div class="row">
        
<?php 
$lista = array("listaProjetos" => array());

$id_projeto = mysqli_fetch_array($this->execute_query("SELECT id FROM cadastro_projetos WHERE solicitante_id = $id"));
$lista[id] = $id_projeto["id"];

$nome_projeto = mysqli_fetch_array($this->execute_query("SELECT nome_projeto FROM cadastro_projetos WHERE solicitante_id = $id"));
$lista[nome_projeto] = $nome_projeto["nome_projeto"];

$descricao_completa = mysqli_fetch_array($this->execute_query("SELECT descricao_completa FROM cadastro_projetos WHERE solicitante_id = $id"));
$lista[descricao_completa] = $descricao_completa["descricao_completa"];

$valor_minimo = mysqli_fetch_array($this->execute_query("SELECT valor_minimo FROM cadastro_projetos WHERE solicitante_id = $id"));
$lista[valor_minimo] = $valor_minimo["valor_minimo"];

$valor_maximo = mysqli_fetch_array($this->execute_query("SELECT valor_maximo FROM cadastro_projetos WHERE solicitante_id = $id"));
$lista[valor_maximo] = $valor_maximo["valor_maximo"];

$prazo_minimo = mysqli_fetch_array($this->execute_query("SELECT prazo_minimo FROM cadastro_projetos WHERE solicitante_id = $id"));
$lista[prazo_minimo] = $prazo_minimo["prazo_minimo"];

$prazo_maximo = mysqli_fetch_array($this->execute_query("SELECT prazo_maximo FROM cadastro_projetos WHERE solicitante_id = $id"));
$lista[prazo_maximo] = $prazo_maximo["prazo_maximo"];

$observacoes = mysqli_fetch_array($this->execute_query("SELECT observacoes FROM cadastro_projetos WHERE solicitante_id = $id"));
$lista[observacoes] = $observacoes["observacoes"];

$nome_freelancer = mysqli_fetch_array($this->execute_query("SELECT nome_freelancer FROM contatar_solicitante WHERE solicitante_id = $id"));
$lista[nome_freelancer] = $nome_freelancer["nome_freelancer"];

$email_freelancer = mysqli_fetch_array($this->execute_query("SELECT email_freelancer FROM contatar_solicitante WHERE solicitante_id = $id"));
$lista[email_freelancer] = $email_freelancer["email_freelancer"];

$mensagem = mysqli_fetch_array($this->execute_query("SELECT mensagem FROM contatar_solicitante WHERE solicitante_id = $id"));
$lista[mensagem] = $mensagem["mensagem"];

?>
      
     <div class="col-lg-8">         
   	<div class="panel">
   		<div class="panel-body bio-graph-info">
   		<div class="profile-info col-md-12">
            
<c:forEach items="<?php $lista["listaProjetos"]['id']; ?>" var="id">            
            
<div class="panel">
<div class="row">
<form class="form-horizontal" id="contact-form" action="cadastrarProjeto.php" method="post" enctype="multipart/form-data">
	
	<h4 for="id"></h4>
    <input class="form-control-static" type="hidden" name="id">
	
	<div class="bio-row">
	    <h4 for="nome_projeto">Nome do Projeto: <?php echo $lista["listaProjetos"]['nome_projeto'];?></h4>
	</div>
	
	<div class="bio-row">
	    <h4 for="descricao_completa">Descrição: <?php echo $lista["listaProjetos"]['descricao_completa'];?></h4>
	</div>
	
	<div class="bio-row">
	    <h4 for="valor_minimo">Valor Minimo: <?php echo $lista["listaProjetos"]['valor_minimo'];?></h4>
	</div>
	
	<div class="bio-row">
	    <h4 for="valor_maximo">Valor Maximo: <?php echo $lista["listaProjetos"]['valor_maximo'];?></h4>
	</div>
	
	<div class="bio-row">
	    <h4 for="prazo_minimo">Prazo Minimo: <?php echo $lista["listaProjetos"]['prazo_minimo'];?></h4>
	</div>
	
	<div class="bio-row">
	    <h4 for="prazo_maximo">Prazo Maximo: <?php echo $lista["listaProjetos"]['prazo_maximo'];?></h4>
	</div>
	
	<div class="bio-row">
	    <h4 for="observacoes">Observações: <?php echo $lista["listaProjetos"]['observacoes'];?></h4>
	</div>
	
	<div class="bio-row">
	    <h4 for="nome_freelancer">Nome do Freelancer: <?php echo $lista["listaProjetos"]['nome_freelancer'];?></h4>
	</div>
	
	<div class="bio-row">
	    <h4 for="email_freelancer">Email do Freelancer: <?php echo $lista["listaProjetos"]['email_freelancer'];?></h4>
	</div>
	
	<div class="bio-row">
	    <h4 for="mensagem">Mensagem do Freelancer: <?php echo $lista["listaProjetos"]['mensagem'];?></h4>
	</div>
	
</div>
</div>

</div>   
     
</form> 
             
</div>   
         
</div> 
      
      
  </c:forEach>    
         
            </div>
        </div>
    </div>
  </div>
</div>



<?php include_once ("rodape.php"); ?>



<script src="ModeloProjetosEmAndamento/js/bootstrap.min.js"></script>



</body>
</html>
