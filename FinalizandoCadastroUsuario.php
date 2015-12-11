<meta charset="UTF-8"/>
<?php
// chama php de conexão com o banco
  include("Config.php")
?>

<?php

// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !

$avatar       			   = $_POST ["avatar"];
$data  			     	   = $_POST ["data"];
$telefone	  			   = $_POST ["telefone"];
$sexo     	 			   = $_POST ["sexo"];
$pais     	 			   = $_POST ["pais"];
$estado      			   = $_POST ["estado"];
$cidade      			   = $_POST ["cidade"];
$endereco    			   = $_POST ["endereco"];
$escolaridade 			   = $_POST ["escolaridade"];
$formacao     			   = $_POST ["formacao"];
$instituicao  			   = $_POST ["instituicao"];
$experiencia               = $_POST ["experiencia"];

       //BUSCA ID COOKIE

        $id= $_COOKIE["coid"];

        //Gravando no banco de dados!
        $tipo_acesso="Pessoa física";
        $query = "INSERT INTO cadastro_pessoa_fisica (id_cadastro, avatar, data_nascimento, telefone, sexo, pais, estado, cidade, endereco, escolaridade, formacao, instituicao, experiencia_profissional, tipo_acesso) VALUES ('$id','$avatar','$data','$telefone','$sexo','$pais','$estado','$cidade','$endereco', '$escolaridade', '$formacao', '$instituicao', '$experiencia', '$tipo_acesso')";

        mysql_query($query);

        //envia mensagem na tela e direcionar para feednoticia

        echo "<script> alert('Dados cadastrados com sucesso'); window.location.replace('FeedNoticia.php'); </script>";


?> 
 	