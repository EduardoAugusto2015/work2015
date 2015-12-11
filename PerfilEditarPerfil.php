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
    <link href="ModeloPerfilEditarPerfil/css/bootstrap.min.css" rel="stylesheet">
    <link href="ModeloPerfilEditarPerfil/css/bootstrap-theme.css" rel="stylesheet">
    <link href="ModeloPerfilEditarPerfil/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="ModeloPerfilEditarPerfil/css/font-awesome.min.css" rel="stylesheet" />
    <link href="ModeloPerfilEditarPerfil/css/style.css" rel="stylesheet">
    <link href="ModeloPerfilEditarPerfil/css/style-responsive.css" rel="stylesheet" />
    <style type="text/css"> body,td,th {font-family: Lato, sans-serif;font-size: 9px;}</style>
    <HTML5 shim and Respond.js IE8 support of HTML5>
    <script src="ModeloPerfilEditarPerfil/js/html5shiv.js"></script>
    <script src="ModeloPerfilEditarPerfil/js/respond.min.js"></script>
    <script src="ModeloPerfilEditarPerfil/js/lte-ie7.js"></script>

<link type="text/css" rel="stylesheet" id="arrowchat_css" media="all" href="/webeasywork/Arrowchat/external.php?type=css" charset="utf-8" />
<script type="text/javascript" src="/webeasywork/Arrowchat/includes/js/jquery.js"></script>
<script type="text/javascript" src="/webeasywork/Arrowchat/includes/js/jquery-ui.js"></script>

</head>
<body>

   

<!--links da barra superior inicio--->
<?php include("barraNavegacao.php") ?>
<!--links da barra superior fim--->

<!----Painel esquerdo inicio---> 

<div class="col-md-10 no-paddin-xs">
  <div class="row"> 
    <div class="profile-nav col-md-4"> 
      <div class="panel"> 

          <div class="user-heading round"> <a href="#"> 
          <img id="uploadPreview1"<img src="ModeloPerfilEditarPerfil/img/perfil.png" alt=""> </a>       
          <input id="uploadImage1" type="file" name="avatar" onChange="PreviewImage(1);" /> 

              
                    
            <script type="text/javascript">
                function PreviewImage(no) {
                    var oFReader = new FileReader();
                    oFReader.readAsDataURL(document.getElementById("uploadImage"+no).files[0]);
            
                    oFReader.onload = function (oFREvent) {
                        document.getElementById("uploadPreview"+no).src = oFREvent.target.result;
                    };
                }
            </script>
           
           
           
          
          <h1>Márilia Vilas Boas</h1> 
        </div>

        <ul class="nav nav-pills nav-stacked">
          <li><a href="perfil.php"> <i class="fa fa-user"></i> Perfil</a></li>
          <li><a href="#"> <i class="fa fa-users"></i> Contatos</a></li>
          <li><a href="ProjetosEmAndamento.php"> <i class="fa fa-edit"></i> Projetos em andamento</a></li>
        </ul> 
        
      </div>
     </div>
     
          <!---ínicio--->
          

        <div class="profile-info col-md-8">
           <div class="panel"> 
           
      

            <div class="panel panel-info post panel-shadow">
              <div class="panel-heading">
                <h3 class="panel-title"><font color="#0033FF"><b>Editar perfil</b></h3>
              </div>            
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-md-3 control-label"><font color="#0033FF" size="3">Nome:</font></label>
                  <div class="col-md-8">
                   <input class="form-control" type="text">
                   <p>
                   </p> 
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label"><font color="#0033FF" size="3">Sobrenome:</font></label>
                  <div class="col-md-8">
                    <input class="form-control" type="text">
                    <p>
                   </p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label"><font color="#0033FF" size="3">Data de nascimento:</font></label>
                  <div class="col-md-8">
                    <input class="form-control" type="text">
                    <p>
                   </p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label"><font color="#0033FF" size="3">Telefone:</font></label>
                  <div class="col-md-8">
                    <input class="form-control" type="text">
                    <p>
                   </p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label"><font color="#0033FF" size="3">Sexo:</font></label>
                  <div class="col-md-8">
                    <input class="form-control" type="text">
                    <p>
                   </p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label"><font color="#0033FF" size="3">País</font>:</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text">
                    <p>
                   </p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label"><font color="#0033FF" size="3">Estado:</font></label>
                  <div class="col-md-8">
                    <input class="form-control" type="text">
                    <p>
                   </p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label"><font color="#0033FF" size="3">Cidade:</font></label>
                  <div class="col-md-8">
                    <input class="form-control" type="text">
                    <p>
                   </p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label"><font color="#0033FF" size="3">Endereço:</font></label>
                  <div class="col-md-8">
                    <input class="form-control" type="text">
                    <p>
                   </p>
                  </div>
                </div>
               <div class="form-group">
                  <label class="col-md-3 control-label"><font color="#0033FF" size="3">Escolaridade:</font></label>
                  <div class="col-md-8">
                    <input class="form-control" type="text">
                    <p>
                   </p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label"><font color="#0033FF" size="3">Formação:</font></label>
                  <div class="col-md-8">
                    <input class="form-control" type="text">
                    <p>
                   </p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label"><font color="#0033FF" size="3">Instituição:</font></label>
                  <div class="col-md-8">
                    <input class="form-control" type="text">
                    <p>
                   </p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label"><font color="#0033FF" size="3">Experiências profissional:</font></label>
                  <div class="col-md-8">
                    <input class="form-control" type="text">
                    <p>
                   </p>
                  </div>
                </div>
                
                
              </div>
               <p>
              </p>
              <div class="form-group">
                  <button type="submit" class="btn btn-info">Salvar</button>
              </div>
            </div><!-- end update info-->
           <!-- update info -->
            <div class="panel panel-info post panel-shadow">
              <div class="panel-heading">
                <h3 class="panel-title"><font color="#0033FF"><b>Alterar senha</b></h3>
              </div>            
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-md-4 control-label"><font color="#0033FF" size="3">Email:</font></label>
                  <div class="col-md-7">
                    <input class="form-control" type="text" value="">
                    <p>
                   </p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label"><font color="#0033FF" size="3">Senha atual:</font></label>
                  <div class="col-md-7">
                    <input class="form-control" type="text" value="">
                    <p>
                   </p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label"><font color="#0033FF" size="3">Nova senha:</font></label>
                  <div class="col-md-7">
                    <input class="form-control" type="text" value="">
                    <p>
                   </p>
                  </div>
                </div>
                                
              </div>
              <p>
              </p>
              <div class="form-group">
                  <button type="submit" class="btn btn-info">Salvar</button>
                </div>
              
            </div><!-- end update info-->
          </div>
        
 
 
 
 
               
           <!---fim--->            
            </div>
        </div>
    </div>
  </div>
</div>







<script src="ModeloPerfilEditarPerfil/js/bootstrap.min.js"></script>

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
