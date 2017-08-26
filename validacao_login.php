
<?php
session_start();

if(@$_GET['go'] == 'logar){
	$nome = $_POST['nome'];
	$senha = $_POST['senha'];
	
	$query1 == mysql_num_rows(mysql_query("SELECT 8 FROM usuarios WHERE nome = '$nome' AND senha = '$senha'"));
	if($query1 == 1){
	$_SESSION['nome'] = $nome;
	$_SESSION['senha'] = $senha;
	echo "<script>alert('Usuario logado com sucesso');</script>";
	echo ("<script> window.location.href = '/menu.php';</script>");
	}else{
		echo "<script>alert('Usuario e senha nao correspondem!');</script>";
		echo ("<script> window.location.href = '/login.php';</script>");
	}

}
?>