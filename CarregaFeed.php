<meta charset="UTF-8"/>
<?php
// chama php de conexão com o banco
        include("Config.php")
?>
<?php


//$carregaFeed=mysql_query("SELECT p.*, c.avatar FROM postagens p, cadastro_pessoa_fisica c where p.id_cadastro = c.id_cadastro order by id desc");

$result=mysql_query("SELECT c.avatar, p.nome, p.sobrenome, p.postagens FROM postagens p, cadastro_pessoa_fisica c where p.id_cadastro = c.id_cadastro order by p.id desc");

while($row = mysql_fetch_row($result)) {
	echo "<div class='postagem'>";
	echo "<p>";
	echo '<img src="data:image/jpeg;base64,'.base64_encode($row[0]) .'" width="25" height="25" style="float:left"/>';
	echo "<h3>" . $row[1] . " " . $row[2] . "<h3>";
	echo "</p>";
	echo "<p>";
	echo $row[3];
	echo "</p>";
	echo "</div>";
}

?>