<meta charset="UTF-8">
<?php
//DADOS DE CONEXAO COM O BANCOS
	$host= 'localhost';
	$banco='dbew';
	$user= 'root';
	$pass='';

	$conexao=mysql_connect($host,$user,$pass) or die (mysql_error()) ;
	mysql_select_db($banco) or die (mysql_error());
?>
