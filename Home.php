<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="freelance">
    <meta name="author" content="easywork">
    <title>EasyWork</title>

    <link href="ModeloHome/css/bootstrap.css" rel="stylesheet" />
    <link href="ModeloHome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="ModeloHome/css/style.css" rel="stylesheet" />   

    
    <link rel="shortcut icon" href="ModeloHome/img/logoSite.png">
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

</head>
<body>
    <div class="container" id="home">
      <div class="row text-center">
          <div class="col-md-12" >
              <h1 class="head-main">Bem-vindo ao EasyWork</h1>
                  
					<style>
                    <--senha-->
						body {
						   background:#82719f;
						  
						   font-family: 'Open Sans', sans-serif;
						   font-size: 100%;
						}
						h1 {
						  font-size: 1.7em;
						  font-weight: 600;
						  color: #fff;
						  text-align: center;
						  padding: 4em 0em 1em 0em;
						}
						.login {
						  width: 25%;
						  margin: 0em auto 0em;
						  text-align: center;
						  background: #FAFEFF;
						  padding: 20px;
						 
						}
						.buttons {
						  margin: 1em 0em 2em;
						}
						.buttons ul li {
						  display: inline-block;
						}
						.buttons ul li a {
						  font-size: 0.9em;
						  font-weight: 400;
						  color: #fff;
						  
						}


						.buttons ul li a span.twit {
						  background: url(../images/twitter.png)no-repeat 0px 0px;
						  width:20px;
						  height:20px;
						  display:inline-block;
						  vertical-align: text-top;
						  margin: 0em 1.5em 0em 0em;
						}
						.login h2 {
						  font-size: 0.9em;
						  font-weight: 400;
						  color: #000;
						  background: #ccc;
						  width: 8%;
						  margin: 0 auto;
						  border-radius: 45px;
						  -webkit-border-radius:45px;
						  -moz-border-radius:45px;
						  -o-border-radius:45px;
						  padding: 0.5em 0em;
						}
						.login input[type="text"] {
						  font-size: 1.5em;
						  font-weight: 500;
						  color: #999;
						  padding: 10px 10px;
						  width: 91%;
						  outline:none;
						 
						  border: 2px solid #999;
						  margin: 1.5em 0em 1em 0em;
						}
						.login input[type="password"]{
						  font-size: 1.5em;
						  font-weight: 500;
						  color: #999;
						  padding: 10px 10px;
						  width: 91%;
						  outline:none;
						 
						  border: 2px solid #999;
						  margin: 1.5em 0em 1em 0em;
						}
						.forgot-para {
						  float: right;
						}
						label.checkbox {
						  float: left;
						}
						.forgot input[type="checkbox"] {
						  display: none;
						}
						.forgot.checkbox input {
							position: absolute;
							left: -9999px;
						}
						.forgot.checkbox i {
							border-color: #fff;
							transition: border-color 0.3s;
							-o-transition: border-color 0.3s;
							-ms-transition: border-color 0.3s;
							-moz-transition: border-color 0.3s;
							-webkit-transition: border-color 0.3s;
							
						}
						.forgot.checkbox i:hover {
							border-color:red;
							
						}
						.forgot i:before {
							background-color: #2da5da;	
						}
						.forgot  .rating label {
							color: #ccc;
							transition: color 0.3s;
							-o-transition: color 0.3s;
							-ms-transition: color 0.3s;
							-moz-transition: color 0.3s;
							-webkit-transition: color 0.3s;
						}
						.forgot .checkbox input + i:after {
							position: absolute;
							opacity: 0;
							transition: opacity 0.1s;
							-o-transition: opacity 0.1s;
							-ms-transition: opacity 0.1s;
							-moz-transition: opacity 0.1s;
							-webkit-transition: opacity 0.1s;
						}
						.forgot .checkbox input + i:after {
						  content: url(../images/tick.png) no-repeat 7px 1px;
						  top: 1px;
						  left: 0px;
						  width: 13px;
						  height: 15px;
						}
						.forgot .checkbox {
							padding: 6px 3px 0px 26px;
							font-size: 14px;
							font-weight: 500;
							line-height: 5px;
							color:#777;
							cursor: pointer;
							position: relative;
							display: block;
							float: left;
						}
						.forgot .checkbox:hover {
							text-decoration: none;
						}
						.forgot .checkbox i {
						  position: absolute;
						  top: 1px;
						  left: 6px;
						  display: block;
						  width: 13px;
						  height: 13px;
						  outline: none;
						  border: 1px solid #B3B2B2;
						  /* border-radius: 4px; */
						  background: #fff;
						}
						.forgot  .checkbox input + i:after {
							position: absolute;
							opacity: 0;
							transition: opacity 0.1s;
							-o-transition: opacity 0.1s;
							-ms-transition: opacity 0.1s;
							-moz-transition: opacity 0.1s;
							-webkit-transition: opacity 0.1s;
						}
						.forgot .checkbox input + i:after {
							color: #2da5da;
						}
						.forgot.checkbox input:checked + i,
						.forgot . input:checked + i {
							border-color: #2da5da;	
						}
						.forgot .rating input:checked ~ label {
							color: #2da5da;	
						}
						
						.forgot .checkbox input:checked + i:after {
							opacity: 1;
						}
						.forgot-para a p {
						  font-size: 0.9em;
						  font-weight: 400;
						  color: #777;
						}
						.forgot-para a p:hover {
						  color: #00aeed;
						  transition: 0.5s all;
						  -webkit-transition: 0.5s all;
						  -moz-transition: 0.5s all;
						  -o-transition: 0.5s all;
						}
						.forgot {
						  margin: 1em auto;
						  width: 100%;
						}
						.login input[type="submit"] {
						  font-size: 1.2em;
						  font-weight: 600;
						  color: #fff;
						  background:none;
						  border: none; 
						  outline: none;
						  cursor:pointer;
						  transition: 0.5s all;
						  -webkit-transition: 0.5s all;
						  -moz-transition: 0.5s all;
						  -o-transition: 0.5s all;
						}
						
						.login h3 {
						  font-size: 0.95em;
						  font-weight: 400;
						  color: #777;
						  margin: 0.7em 0em;
						}
						.login h3 a{
						  font-size: 0.95em;
						  font-weight: 400;
						  color: #00aeed;
						}
						.login h3 a:hover{
						  color: #3b5998;
						  transition: 0.5s all;
						  -webkit-transition: 0.5s all;
						  -moz-transition: 0.5s all;
						  -o-transition: 0.5s all;
						}
						.copyright {
						  margin: 8em 0em 0em 0em;
						  text-align: center;
						}
						.copyright p {
						  font-size: 1em;
						  font-weight: 400;
						  color: #fff;
						}
						.copyright p a{
						  font-size: 1em;
						  font-weight: 400;
						  color:#fff ;
						}
						.copyright p a:hover{
							color: #000;
							 transition: 0.5s all;
						  -webkit-transition: 0.5s all;
						  -moz-transition: 0.5s all;
						  -o-transition: 0.5s all;
						}
						
						/* Sweep To Bottom */
						.hvr-sweep-to-bottom {
						  display: inline-block;
						  vertical-align: middle;
						  -webkit-transform: translateZ(0);
						  transform: translateZ(0);
						  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
						  -webkit-backface-visibility: hidden;
						  backface-visibility: hidden;
						  -moz-osx-font-smoothing: grayscale;
						  position: relative;
						  -webkit-transition-property: color;
						  transition-property: color;
						  -webkit-transition-duration: 0.3s;
						  transition-duration: 0.3s;
						  width: 93%;
						  background-color: #3B5998;
							padding: 7px 10px;
						}
						.hvr-sweep-to-bottom:before {
						  content: "";
						  position: absolute;
						  z-index: -1;
						  top: 0;
						  left: 0;
						  right: 0;
						  bottom: 0;
						  background: #2098d1;
						  -webkit-transform: scaleY(0);
						  transform: scaleY(0);
						  -webkit-transform-origin: 50% 0;
						  transform-origin: 50% 0;
						  -webkit-transition-property: transform;
						  transition-property: transform;
						  -webkit-transition-duration: 0.3s;
						  transition-duration: 0.3s;
						  -webkit-transition-timing-function: ease-out;
						  transition-timing-function: ease-out;
						}
						.hvr-sweep-to-bottom:hover, .hvr-sweep-to-bottom:focus, .hvr-sweep-to-bottom:active {
						  color: white;
						}
						.hvr-sweep-to-bottom:hover:before, .hvr-sweep-to-bottom:focus:before, .hvr-sweep-to-bottom:active:before {
						  -webkit-transform: scaleY(1);
						  transform: scaleY(1);
						}
						
						
						
						/*--meadia quiries start here--*/
						@media(max-width:1440px){
						.login {
						  width: %;
						}
						h1 {
						  padding: 3em 0em 1em 0em;
						}
						.forgot .checkbox i {
						  top: 1px;
						  left: 2px;
						}
						.login input[type="text"] {
						  width: 88.5%;
						}
						.login input[type="password"] {
						  width: 88.5%;
						}
						.hvr-sweep-to-bottom {
						  width: 91%;
						}
						.forgot {
						  width: 94%;
						}
						.buttons ul li a.face {
						  padding: 0.5em 1em 0.5em 1em;
						}
						.buttons ul li a.twit {
						  padding: 0.5em 2em 0.5em 1.5em;
						}
						}
						@media(max-width:1366px){
						.copyright {
						  margin: 8em 0em 2em 0em;
						}
						h1 {
						  padding: 2em 0em 0em 0em;
						}
						.login input[type="text"] {
						  width: 87%;
						}
						.login input[type="password"] {
						  width: 87%;
						}
						.forgot {
						  width: 93%;
						}
						.buttons ul li a span.twit {
						  margin: 0em 1em 0em 0em;
						}
						.buttons ul li a.twit {
						  padding: 0.5em 1em 0.5em 1.5em;
						}
						}
						@media(max-width:1280px){
						.login {
						  width: 29%;
						}
						.login h2 {
						  padding: 0.4em 0em;
						}
						.login input[type="text"] {
						  width: 90%;
						}
						.login input[type="password"] {
						  width: 90%;
						}
						.forgot {
						  width: 97%;
						}
						
						.buttons ul li a.twit {
						  padding: 0.5em 1em 0.5em 0.6em;
						}
						}
						@media(max-width:1024px){
						.login {
						  width: 35%;
						}
						.copyright {
						  margin: 7em 0em 2.2em 0em;
						}
						.login {
						  width: 36%;
						}
						.hvr-sweep-to-bottom {
						  width: 92%;
						}
						.buttons ul li a.twit {
						  padding: 0.5em 1em 0.5em 0.8em;
						}
						.buttons ul li a.face {
						  padding: 0.5em 1em 0.5em 0.6em;
						}
						}
						@media(max-width:768px){
						.login {
						  width: 48%;
						}
						h1 {
						  padding: 6em 0em 0em 0em;
						}
						.copyright {
						  margin: 15em 0em 3em 0em;
						}
						.login input[type="text"] {
						  width: 91%;
						}
						.login input[type="password"] {
						  width: 91%;
						}
						.buttons ul li a span.face {
						  margin: 0em 1.2em 0em 0em;
						}
						.hvr-sweep-to-bottom {
						  width: 93.2%;
						}
						.buttons ul li a.twit {
						  padding: 0.5em 1.5em 0.5em 0.8em;
						}
						}
						@media(max-width:736px){
						.buttons ul li a.face {
						  padding: 0.7em 0.8em 0.7em 0.5em;
						}
						.buttons ul li a.twit {
						  padding: 0.7em 1em 0.7em 1em;
						}
						.buttons ul li a span.face {
						  margin: 0em 0.7em 0em 0em;
						}
						}
						@media(max-width:667px){
						.login {
						  width: 54%;
						}	
						.buttons ul li a.face {
						  padding: 0.7em 0.8em 0.7em 0.85em;
						}
						}
						@media(max-width:640px){
						.copyright {
						  margin: 10em 0em 3em 0em;
						}
						h1 {
						  padding: 2em 0em 0em 0em;
						}
						.login {
						  width: 58%;
						}
						.buttons ul li {
						  margin: 0em 0em 1.8em 0em;
						}
						.buttons {
						  margin: 1.5em 0em 0em 0em;
						}
						.login h2 {
						  font-size: 0.85em;
						}
						.buttons ul li a.face {
						  padding: 0.6em 6.5em 0.6em 6.5em;
						}
						.buttons ul li a span.face {
						  margin: 0em 2em 0em 0em;
						}
						.buttons ul li a.twit {
						  padding: 0.7em 7em 0.7em 6.3em;
						}
						.buttons ul li a span.twit {
						  margin: 0em 3em 0em 0em;
						}
						.hvr-sweep-to-bottom {
						  width: 93%;
						}
						}
						@media(max-width:600px){
						.buttons ul li a.face {
						  padding: 0.7em 6em 0.7em 5.4em;
						}
						.buttons ul li a.twit {
						  padding: 0.7em 6em 0.7em 5.5em;
						}
						.login h2 {
						  width: 9%;
						}
						}
						@media(max-width:568px){
						.login {
						  width: 61%;
						}	
						}
						@media(max-width:480px){
						.buttons ul li a {
						  font-size: 0.8em;	
						}
						.copyright {
						  margin: 7em 0em 3em 0em;
						}
						.login {
						  width: 71%;
						  padding: 20px;
						}
						.login h2 {
						  padding: 0.2em 0em;
						}
						.login input[type="text"] {
						  font-size: 0.75em;
						  padding: 6px 10px;
						}
						.login input[type="password"] {
						  font-size: 0.75em;
						  padding: 6px 10px;
						}
						.hvr-sweep-to-bottom {
						  width: 92%;
						}
						.forgot-para a p {
						  font-size: 0.8em;
						}
						.forgot .checkbox {
						  font-size: 13px;
						}
						.buttons ul li a.face {
						  padding: 0.7em 7em 0.7em 6.3em;
						}
						.buttons ul li a.twit {
						  padding: 0.7em 6.8em 0.7em 6.7em;
						}
						.login h2 {
						  width: 8%;
						}
						}
						@media(max-width:414px){
						.forgot .checkbox {
						  font-size: 12px;
						}
						.forgot-para a p {
						  font-size: 0.75em;
						}
						.buttons ul li a.face {
						  padding: 0.7em 4em 0.7em 4.85em;
						}
						.buttons ul li a.twit {
						  padding: 0.7em 4em 0.7em 5em;
						}
						.login h2 {
						  width: 9%;
						}
						}
						@media(max-width:384px){
						.forgot-para a p {
						  font-size: 0.65em;
						}
						.forgot .checkbox {
						  font-size: 11.5px;
						}
						.login h2 {
						  width: 11%;
						}
						.buttons ul li a.face {
						  padding: 0.7em 3.7em 0.7em 3.8em;
						}
						.buttons ul li a.twit {
						  padding: 0.7em 3.7em 0.7em 4em;
						}
						.login input[type="text"] {
						  width: 90%;
						}
						.login input[type="password"] {
						  width: 90%;
						}
						}
						@media(max-width:375px){
						.buttons ul li a.face {
						  padding: 0.7em 3.5em 0.7em 3.5em;
						}
						.buttons ul li a.twit {
						  padding: 0.7em 3.6em 0.7em 3.5em;
						}
						.login input[type="text"] {
						  width: 88%;
						}
						.login input[type="password"] {
						  width: 88%;
						}
						}
						@media(max-width:320px){
						h1 {
						  padding: 1em 0em 0em 0em;
						  font-size: 1.4em;	
						}
						.login {
						  width: 85%;
						  margin: 1em auto 0em;
							padding: 17px;
						}
						.buttons ul li a {
						  font-size: 0.75em;
						}
						
						.hvr-sweep-to-bottom{
						width: 91%;
						padding: 6px 10px;
						}
						.copyright {
						  margin: 3em 0em 2.1em 0em;
						}
						.login h2 {
						  width: 10%;
						  padding: 0.2em 0em;
						}
						.buttons {
						  margin: 0.5em 0em;
						}
						.login h3 {
						  font-size: 0.8em;
						}
						.login input[type="text"] {
						  padding: 6px 10px;
						  width: 89%;
						  margin: 1em 0em 0.5em 0em;
						  font-size: 0.73em;
						}
						.login input[type="password"] {
						  padding: 6px px;
						  width: 100%;
						}
						.copyright p {
						  font-size: 0.8em;
						}
						.forgot-para a p {
						  font-size: 0.7em;
						}
						.forgot .checkbox {
						  font-size: 12px;
						}
						.buttons ul li {
						  margin: 0px 0px 13px 0px;
						}
						.forgot .checkbox {
						  font-size: 11px;
						}
						.buttons ul li a.twit {
						  padding: 0.7em 4.6em 0.7em 4.5em;
						}
						.buttons ul li a.face {
						  padding: 0.7em 4.5em 0.7em 4.5em;
						}
						}
				</style>

				  
                <div class="login">
                            
                                
                                    <font face="Trebuchet MS, Arial, Helvetica, sans-serif"
                                    color="#999999"size="4">Faça login abaixo! </font></a>

                                
                            <p></P
                          <fieldset id="fie">
                            
                            <form name="form_login" method="post" action="Autenticando.php">

                            

                                <input type="text" name="email" placeholder="Email..." id="email">

                                
                                <input type="Password" name="senha"  placeholder="Senha..." id="senha">
                                
                                <p></p>
                                <label  class="hvr-sweep-to-bottom">
                                
                                <input type="submit" value="Entrar"</a>
                                </label>
                            </form>    
 						   </fieldset>	
                           
                            <p></p>
                            <h3><a href="ForgotPassword.php"><font size="2">Clique aqui para recuperar senha.</font></a></h3> 
                            <h3><a href="Cadastro.php"><font size="3">Novo usuário? Inscreva-se agora! </font></a></h3>
                        </div>
                  <!----FINAL--->          
              <h2 class="head-sub-main"> </h2>        
          </div>
      </div>
    </div>
    <!--End Header section  -->

     <!-- Navigation -->
      <nav class="navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href=""><img src="ModeloHome/img/logoSite.png" alt=""> </a>
            </div>
            <!-- Collect the nav links for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#home">INÍCIO</a>
                    </li>
                    <li><a href="#about">QUEM SOMOS?</a>
                    </li>                    
                    <li><a href="#about-team">CONHEÇA NOSSA EQUIPE</a>
                    </li>
                    <li><a href="#services-sec">PRINCIPAIS PATROCINADORES</a>
                    </li>
                    <li><a href="#contact-sec">CONTATO</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav> 
     <!--End Navigation -->

    <!--About Section-->
    <section class="for-full-back color-white " id="about"  >
   <div class="container" >
      
            <div class="row text-center" >
                <div class="col-md-8 col-md-offset-2 ">
                  <h1><font color="#000000"size="15">A Plataforma EasyWork</font></h1>
                    <h4>
                        <strong>        
                           A EasyWork é uma plataforma totalmente gratuita onde empresas e pessoas físicas podem contratar 
						   profissionais para executar projetos autônomos. 
                        </strong>
                    </h4>
                </div>
                
            </div>

      </div>
</section>
    <!--End About Section-->

    <!-- Dados da equipe -->  
    <section class="for-full-back color-light" id="about-team"  >
   <div class="container" >
      
            <div class="row text-center" >
                <div class="col-md-8 col-md-offset-2 ">
                    <h1><font color="#000000"size="15">Conheça Equipe EasyWork</font></h1>
                    <h4>
                        <strong>
                       Buscamos atrair os melhores talentos, para desenvolver uma plataforma
					   interativa e de fácil uso, Creatividade e Inspiração, atitudes que fazem a diferença.
                        </strong>
                    </h4>
                </div>
                
            </div>


                <div class="col-md-4 col-sm-3 col-xs-6">
						<div class="team-member">
							<img src="ModeloHome/img/eduardo.jpg" alt="">
                            <h3> <strong> Eduardo Augusto Petreca</strong>
                                <p></p>
								<font size="3">Fundador, CEO, Programador e Designer.</font></h3>
						</div>
			    </div>
                <div class="col-md-4 col-sm-3 col-xs-6">
						<div class="team-member">
							<img src="ModeloHome/img/marilia.jpg" alt="">
                            <h3> <strong> Marília Vilas Boas </strong>
                                <br /><br />
						        <font size="3">Fundadora, CO-CEO, Programadora e Marketing.</font></h3>
						</div>
					</div>
                    
                   <div class="col-md-4 col-sm-3 col-xs-6">
						<div class="team-member">
							<img src="ModeloHome/img/Gabriel.jpg" alt="">
                            <h3> <strong> Gabriel Noronha</strong>
                                <br /><br />
						<font size="3">Planejador Finânceiro, Programador e Designer.</font></h3>
						</div>
					</div>
                    

                    
                    
            

</section>

     <section class="for-full-back color-white " id="services-sec"  >
   <div class="container" >
      
            <div class="row text-center" >
                <div class="col-md-8 col-md-offset-2 ">
                    <h1><font color="#000000"size="15">Principais Patrocinadores</font></h1>
                    <h4>
                        <strong>
						Agradecemos aos nossos patrocinadores que acreditaram em nossa equipe desde começo. 
                        </strong>
                    </h4>
                </div>
            </div>   
                       <div class="col-md-4 col-sm-3 col-xs-6">
						<div class="team-member">
							<img src="ModeloHome/img/sebrae.jpg" alt="">
						</div>
			    </div>
                <div class="col-md-4 col-sm-3 col-xs-6">
						<div class="team-member">
							<img src="ModeloHome/img/vinicius.jpg" alt="">

						</div>
					</div>
                    
                   <div class="col-md-4 col-sm-3 col-xs-6">
						<div class="team-member">
							<img src="ModeloHome/img/expresso.jpg" alt="">
 
						</div>
					</div>


    </div>    
</section>
    <!--End Services Section -->  
    <!-- Contact Section -->  
     <section class="for-full-back color-light " id="contact-sec"  >
   <div class="container" >      
            <div class="row text-center" >
                <div class="col-md-8 col-md-offset-2 ">
                    <h1><font color="#000000,"size=15">Perguntas? Consulte-nos agora.</font></h1>
                </div>            
            </div>
        <div class="row" >
            
            <div class="row text-center" >
            
                <h3><font color="#000000,"size=7">Nossos contatos:</font></h3>
					<div >
						<font color="#000000,"size=4">
                        <span><i class="fa fa-home"> </i> Endereço: Poços de Caldas - MG</span>
                        <br />

						<span><i class="fa fa-envelope-o"> </i>E-Mail: contato.easywork@gmail.com</span>
                        <br />
                          </font>
					</div>
					<br />
					<div  class="for-full-back "   id="social-icon">
                    
					    <a target="_blanck" href="https://www.facebook.com/EasyWork-Freelance-333794376732154/timeline/?ref=hl"><i class="fa fa-facebook fa-2x"></i></a>
						<a target="_blanck" href="https://twitter.com/EasyWorkads?lang=pt"><i class="fa fa-twitter fa-2x"></i></a>
						<a target="_blanck" href="https://plus.google.com/u/0/112812447148754696872/"><i class="fa fa-google-plus fa-2x"></i></a>				
					</div>
            </div>
                <div class="col-md-7">                    
                    </p>
                        
                </div>
                
            </div>
      </div>
</section>
<!--End Contact Section -->
    <!--footer Section -->
     <div  class="for-full-back "  id="footer" >
               
          
       <center> © Todos Direitos Reservados 2015 | www.easywork.net.br </center> 
         
     </div>
    <!--End footer Section -->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="ModeloHome/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="ModeloHome/plugins/bootstrap.js"></script>
    <!-- VEGAS SLIDESHOW SCRIPTS -->
    <script src="ModeloHome/plugins/vegas/jquery.vegas.min.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="ModeloHome/js/custom.js"></script>
     
</body>
</html>
