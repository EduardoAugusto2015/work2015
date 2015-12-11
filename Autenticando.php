<meta charset="utf-8"/>
<?php
//dados para conexão no banco
    include("config.php")
?>

<?php
//pega login e senha digitado na home.php
    $email=$_POST['email'];
	$senha=$_POST['senha'];

	if(empty($_POST['email']) && empty($_POST['senha'])){
	echo "<script> alert('Por favor, digite email e senha!'); window.location.replace('Home.php'); </script>";
	break;
	} else if(empty($_POST['email'])){
		echo "<script> alert('Por favor, Digite o email!'); window.location.replace('Home.php'); </script>";
	break;
	} else if (empty($_POST['senha'])){
		echo "<script> alert('Por favor, Digite o senha!'); window.location.replace('Home.php'); </script>";
	break;
	}

	$sql= mysql_query("SELECT * FROM cadastro where  email = '$email' and senha = '$senha'")or die (mysql_error());
	$row= mysql_num_rows($sql);

?>
<?php
if ( $row>0){
	header('Content-Type: text/html; charset=utf-8');
	session_start();

	$array=mysql_fetch_array(mysql_query("SELECT id,nome,email FROM cadastro where  email = '$email'
	and senha = '$senha'"));

	$arraynome=mysql_fetch_array(mysql_query("SELECT id,nome,email FROM cadastro where  email = '$email' 
	and senha = '$senha'"));

	$arraysobrenome=mysql_fetch_array(mysql_query("SELECT id,nome,sobrenome, email FROM cadastro where 
	email = '$email' and senha = '$senha'"));

	$valueID = $_session['id']=$array[0];
	$valueemail=$_session['email']=$_POST['email'];
	$valuenome=$_session['nome']=$arraynome['nome'];
	$valuesobre=$_session['sobrenome']=$arraysobrenome['sobrenome'];

	$_session['senha']=$_POST['senha'];

	setcookie("coid", $valueID);
	setcookie("conome", $valuenome);
	setcookie("cosobrenome", $valuesobre);

	$verificaIDPessoaFisica = mysql_query("SELECT * FROM cadastro_pessoa_fisica WHERE id_cadastro='$array[0]'") 
	or die (mysql_error());
	$row1= mysql_num_rows($verificaIDPessoaFisica) ;

	$verificaIDEmpresa = mysql_query("SELECT * FROM cadastro_empresa WHERE id_cadastro ='$array[0]'") 
	or die (mysql_error());
	$row2= mysql_num_rows($verificaIDEmpresa);

	if ($row1>0 || $row2>0){
		echo "<script> window.location.replace('FeedNoticia.php'); </script>";
	}else{
		echo "<script> window.location.replace('TipoAcesso.php'); </script>";
	}

}else{
	echo "<script>  alert('Login ou senha incorreto tente novamente!'); window.location.replace('Home.php');</script>";
}
?>


