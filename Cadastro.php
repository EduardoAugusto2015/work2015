<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro EasyWork</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="ModeloCadastro/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="ModeloCadastro/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="ModeloCadastro/css/form-elements.css">
        <link rel="stylesheet" href="ModeloCadastro/css/style.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="ModeloCadastro/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ModeloCadastro/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ModeloCadastro/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ModeloCadastro/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="ModeloCadastro/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

		<!-- Top menu -->
		<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
			<div class="container">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						
					</ul>
				</div>
			</div>
		</nav>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 text">
                            <h1><strong</strong><font color="#000000"><strong>Easy Work</strong></font></h1>
                            <div class="description">
                            	<p>
	                            	<font color="#000000"><strong>Nossa missão é proporcionar para nossos clientes a oportunidade de emprego no intuito de diminuir o alto índice de desemprego no país. Além de melhorar a comunicação entre empresa e empregado. </strong></font>
                            	</p>
                            </div>
                            <div class="top-big-link">
                            	
                            	
                            </div>
                        </div>
                        <div class="col-sm-5 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        		  <font color="#704A7C"<h3><strong>Cadastre-se Agora!</strong></h3>
                        		  <p>Preencha o formulário abaixo para ter acesso imediato:</p></font>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-pencil"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">                            
			                    
                                <form id="cadastro" name="cadastro" method="post" action="Cadastrando.php">
                                
			                    	<div class="form-group">
                                    <p>
			                    		<label class="sr-only" for="nome">Nome</label>
			                    		<input type="text" name="nome" placeholder="Nome..." class="form-nome form-control" id="nome">
                                    </p>   
			                        </div>
                                    
			                        <div class="form-group">
			                        	<label class="sr-only" for="sobrenome">Sobrenome</label>
			                        	<input type="text" name="sobrenome" placeholder="Sobrenome..." class="form-sobrenome form-control" id="sobrenome">
			                        </div>
			                        
                                    <div class="form-group">
		                        	  <p>
		                        	    <label class="sr-only" for="tel">Email</label>
		                        	    <input type="text" name="email" placeholder="Email..." class="form-email form-control" id="email">
		                        	  </p>
                                    </div>
                                    
                                  <p> 
	                        	    <label class="sr-only" for="senha">Senha</label>
		                        	    <input type="password" name="senha" placeholder="Senha..." class="form-senha form-control" id="senha">
                                        
                                        
                                    <span style="right:auto>" 
                                  
                                  
                                   <p>
                                     </p>  
                                    
			                        <button type="submit" class="btn">  <a href="Home.php">Cancelar</a></button>
                                    
                                    <button type="submit" class="btn"> <a>Registrar</a></button>
                                   

	                        	  	</span>
                                  </p>
							</div>
                                    




			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="ModeloCadastro/js/jquery-1.11.1.min.js"></script>
        <script src="ModeloCadastro/bootstrap/js/bootstrap.min.js"></script>
        <script src="ModeloCadastro/js/jquery.backstretch.min.js"></script>
        <script src="ModeloCadastro/js/retina-1.1.0.min.js"></script>
        <script src="ModeloCadastro/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="ModeloCadastro/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>