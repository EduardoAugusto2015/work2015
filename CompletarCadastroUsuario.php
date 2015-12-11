<!DOCTYPE>
<html>
<head>
<meta charset="UTF-8"/>
<title>EasyWork</title>
<link href="ModeloCompleteCadastroUsuario/Style/style.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="ModeloHome/img/logoSite.png">
<script class="jsbin" src="ModeloCompleteCadastroUsuario/js/jquery.min.js"></script>
</head>

<body>
<!-- multistep form -->
<form id="msform" method="post" action="FinalizandoCadastroUsuario.php">
	<!-- progressbar -->
	<ul id="progressbar">
        <p><a href="Feednoticia.php" class="fs-title">Clique aqui para pular esta etapa...</a></p>
        <p>&nbsp;</p>
		<li class="active">Perfil</li>
		<li>Dados Pessoais</li>
		<li>Informações Adicionais</li>
	</ul>
	<!-- fieldsets -->
	<fieldset>
   
        <h2 class="fs-title">Conclua seu cadastro</h2>
        <h3 class="fs-subtitle">Foto de perfil</h3>
		
    <style type="text/css"> img{width:100px;} </style>
    
</head>
<body>

<table>
<tr>
	<td>

		<center><img id="uploadPreview1" src="ModeloCompleteCadastroUsuario/img/perfil.jpg" /><br /></center>
		<input id="uploadImage1" type="file" name="avatar" onChange="PreviewImage(1);" />




	</td>	
</table>
		
<script type="text/javascript">
    function PreviewImage(no) {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage"+no).files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview"+no).src = oFREvent.target.result;
        };
    }
</script>
        <input type="text" name="data" placeholder="Data de nascimento Dia/Mês/Ano" />
		<input type="text" name="telefone" placeholder="Telefone" />
		<input type="text" name="sexo" placeholder="sexo" />		
		<input type="button" name="next" class="next action-button" value="Próximo" />
        
  </fieldset>
	<fieldset>
    
		<h2 class="fs-title">INSIRA SEUS DADOS PESSOAIS</h2>
		<h3 class="fs-subtitle">Localização, Dados Pessoais</h3>
        
		
        <input type="text" name="pais" placeholder="País" />
		<input type="text" name="estado" placeholder="Estado"/>
        <input type="text" name="cidade" placeholder="Cidade" />
        <textarea name="endereco" placeholder="Endereço"></textarea>
        
		<input type="button" name="previous" class="previous action-button" value="Anterior" />
		<input type="button" name="next" class="next action-button" value="Próximo" />
        
	</fieldset>
	<fieldset>
		<h2 class="fs-title">ATUALIZE SUAS INFORMAÇÕES</h2>
		<h3 class="fs-subtitle">Escolaridade, Experiencia Profissional</h3>
        
		<input type="text" name="escolaridade" placeholder="Escolaridade" />
		<input type="text" name="formacao" placeholder="Formação" />
		<input type="text" name="instituicao" placeholder="Instituição" />
		<textarea name="experiencia" placeholder="Experiências profissionais"></textarea>
        
        <style type="text/css"> 
		*{ text-decoration:none;color:#FFF; } 
		</style> 
        
        <input type="button" name="previous" class="previous action-button" value="Anterior" />
		
	  <input type="submit" name="next" class="next action-button" onClick="window.location='Feednoticia.php'" value="salvar">
        
	</fieldset>
</form>

<!-- jQuery -->
<script src="ModeloCompleteCadastroUsuario/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="ModeloCompleteCadastroUsuario/js/jquery.easing.min.js" type="text/javascript"></script>

</body>
</html>

<script>

//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

</script>
