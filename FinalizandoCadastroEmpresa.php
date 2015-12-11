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
$pais     	 			   = $_POST ["pais"];	
$estado      			   = $_POST ["estado"];	
$cidade      			   = $_POST ["cidade"];
$endereco    			   = $_POST ["endereco"];
$atuacao 			       = $_POST ["atuacao"];	
$interesse     			   = $_POST ["interesse"];

//conectando com o localhost - mysql
$conexao = mysql_connect($host,$bd, $senhabd);

if (!$conexao) 	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());

//conectando com a tabela do banco de dados
$banco = mysql_select_db($bd,$conexao);

if (!$banco) die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());

  
//BUSCA ID COOKIE

$id= $_COOKIE["coid"];

//Gravando no banco de dados! 
$tipo_acesso="empresa";

$query = "INSERT INTO cadastro_empresa (id_cadastro, avatar, data_fundacao, telefone, pais, estado, cidade, endereco, area_de_atuacao, area_de_interesse, tipo_acesso) VALUES ('$id','$avatar','$data','$telefone', '$pais', '$estado', '$cidade', '$endereco', '$atuacao', '$interesse', '$tipo_acesso')";


mysql_query($query);

echo "<script> alert('Dados cadastrados com sucesso'); window.location.replace('FeedNoticia.php'); </script>";


?> 
 	