<meta charset="UTF-8"/>

<?php 
//DADOS DE CONEXAO COM O BANCOS
$host= 'localhost';
$bd= 'dbew';
$userbd = 'root'; 
$senhabd= '';
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nome	   = $_POST ["nome"];	
$sobrenome = $_POST ["sobrenome"];	
$email	   = $_POST ["email"];		
$senha     = $_POST ["senha"];	


// VALIDA CAMPOS VAZIOS
if(empty($_POST["nome"])&&empty($_POST["sobrenome"])&&empty($_POST["email"])&&empty($_POST["senha"]) ){
	
echo "<script> alert('Preencha preencha todos campos'); window.location.replace('Cadastro.php'); </script>"; 
break;

}else if(empty($_POST["nome"])){
echo "<script> alert('Preencha o campo nome!'); window.location.replace('Cadastro.php'); </script>"; 
break;

}else if(empty($_POST["sobrenome"])){
echo "<script> alert('Preencha o campo sobrenome!'); window.location.replace('Cadastro.php'); </script>";
break;

}else if(empty($_POST["email"])){
echo "<script> alert('Prencha o campo email!'); window.location.replace('Cadastro.php'); </script>"; 
break;

}else if(empty($_POST["senha"])){
echo  "<script> alert('Preencha o campo senha!'); window.location.replace('Cadastro.php'); </script>";
break;
}
		
//Gravando no banco de dados! 
//conectando com o localhost - mysql
$conexao = mysql_connect($host,$bd, $senhabd);

if (!$conexao) 	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());

//conectando com a tabela do banco de dados
$banco = mysql_select_db($bd,$conexao);

if (!$banco) die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());

	$search = mysql_query("SELECT * FROM Cadastro WHERE email = '$email'");
	
	if(@mysql_num_rows($search) > 0){
				
		//Verifica se o email já existe	
			
		echo "<script> alert('Email já cadastrado! Por favor utilize outro email ou tente recuperar sua senha!'); window.location.replace('Cadastro.php'); </script>"; 

	}else{

		$query = "INSERT INTO Cadastro (nome, sobrenome, email, senha) 
		VALUES ('$nome', '$sobrenome', '$email', '$senha')";
		
		mysql_query($query,$conexao);
		echo "<script> alert('Cadastro realizado com sucesso!'); window.location.replace('Home.php'); </script>"; 
}
?> 
 	