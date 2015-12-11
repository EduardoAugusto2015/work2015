<!DOCTYPE>
<html>
<head>
<title>EasyWork</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>

  <link rel="shortcut icon" href="ModeloHome/img/logoSite.png"/>

  <link href="ModeloTipoAcesso/bootstrap/bootstrap.min.css" rel="stylesheet"/>
	<link href="ModeloTipoAcesso/Style/style.css" rel="stylesheet"/>

  <script src="ModeloTipoAcesso/jquery/jquery-1.11.1.min.js"></script>
  <script src="ModeloTipoAcesso/bootstrap/bootstrap.min.js"></script>

</head>
<body>
<div class="container-fluid bg-info">
    <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h3>Selecione seu tipo de acesso:</h3>
        </div>
        <div class="modal-body">
            <div class="col-xs-3 col-xs-offset-5">
               <div id="loadbar" style="display: none;">
                  <div class="blockG" id="rotateG_01"></div>
                  <div class="blockG" id="rotateG_02"></div>

              </div>
          </div>
		  	
          <div class="tipoDeAcesso" id="primeiro" data-toggle="bu ttons">
          <form>
               <label class="element-animation1 btn btn-lg btn-primary btn-block">
       
               <a href="CompletarCadastroUsuario.php"><font color="#FFFFFF">Pessoa Física</font></a></label>
               
               
               <label class="element-animation2 btn btn-lg btn-primary btn-block">

               <a href="CompletarCadastroEmpresa.php"><font color="#FFFFFF">Empresa</font></a>
              </label>
                       
              
		  </form>		
          </div>
       </div>
       <div class="modal-footer text-muted">
        <span id="answer"></span>
   	   </div>
  </div>
 </div>
</div>
</body>
</html>
