<!DOCTYPE html>
<html lang="pr-BR">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="ModeloHome/img/logoSite.png">
    
    <title>EasyWork</title>
    
    
    <link href="ModeloFeed/css/bootstrap-theme.css" rel="stylesheet">
    <link href="ModeloFeed/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="ModeloFeed/css/font-awesome.min.css" rel="stylesheet" />
    <link href="ModeloFeed/css/style.css" rel="stylesheet">
    <link href="ModeloFeed/css/style-responsive.css" rel="stylesheet" />
    <style type="text/css"> body,td,th {font-family: Lato, sans-serif;font-size: 9px;}</style>
    <HTML5 shim and Respond.js IE8 support of HTML5>
    <script src="ModeloFeed/js/html5shiv.js"></script>
    <script src="ModeloFeed/js/respond.min.js"></script>
    <script src="ModeloFeed/js/lte-ie7.js"></script>
</head>
<body>
  
<?php include("BarraNavegacao.php") ?> 

<div class="col-md-10 no-paddin-xs">
  <div class="row"> 
    <div class="profile-nav col-md-4"> 
      <div class="panel"> 
        <div class="user-heading round"> <a href="#"> 
          <img src="ModeloFeed/img/perfil.png" alt=""> </a> 
          <h1>Márilia Vilas Boas</h1> 
        </div>

        <ul class="nav nav-pills nav-stacked">
          <li><a href="Perfil.php"> <i class="fa fa-user"></i> Perfil</a></li>
          <li><a href="#"> <i class="fa fa-users"></i> Contatos</a></li>
          <li><a href="ProjetosEmAndamento.php"> <i class="fa fa-edit"></i> Projetos em andamento</a></li>
        </ul> 
        
      </div>
     </div>

        <div class="profile-info col-md-8">
           <div class="panel"> 
           
    

              <form id="form" name="postagem" method="post" action="Postando.php">
                              <h4><font color="#0066CC"><b>Como foi seu dia de trabalho? </b></font></h4>
                 <div class="form-group" style="padding:14px;">
                 	<textarea name="msg" id="msg" class="form-control" placeholder="Compartilhe experiências"></textarea> 
                    
                 </div>
                	  <button type="submit" class="btn btn-primary pull-right" >Compartilhar</button>
                      

                     
                      <ul class="nav nav-pills"> 
                       
                          <li> <a href="#"><i class="fa fa-camera-retro fa-3x"></i></a> </li>

                      </ul>
                      
                 <div id="feed">
                 </div>
              </form>    
               
            </div>
          </div>
        </div>
		
        <div class="panel panel-white post-load-more panel-shadow text-center">
         <button class="btn btn-primary1"><i class="fa fa-refresh"></i>Leia mais...</button>
        </div>
    </div>
  </div>
</div>




<script src="ModeloFeed/js/jquery.js"></script>
<script src="ModeloFeed/js/bootstrap.min.js"></script>
<script language="javascript">
$(document).ready(function(e) {
	
	$( "#form" ).on( "submit", function( event ) {
  		event.preventDefault();
		
		var dados = $( this ).serialize();
	
		$.post("Postando.php", dados, function(data) {
			$("#feed").append(data);
			$("#msg").val("");
		});
	});
	
	setInterval(function() {
		$.get("CarregaFeed.php", function(data) {
			$("#feed").html(data);
		});
	}, 1000);
		
});
</script>


</body>
</html>
