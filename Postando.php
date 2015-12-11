<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<?php
//conecta no banco para postar
include('config.php');
?>

<?php

// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$postagens = $_POST ["msg"];	

//BUSCA ID COOKIE

$id= $_COOKIE["coid"];
$nome= $_COOKIE["conome"];
$sobre= $_COOKIE["cosobrenome"];

//Gravando no banco de dados! 

$query = "INSERT INTO postagens(id_cadastro, nome, sobrenome, postagens) VALUES ('$id','$nome','$sobre','$postagens')";

mysql_query($query);

?>