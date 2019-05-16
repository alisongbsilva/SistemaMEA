<?php
$user = $_POST["user"];
$pass = $_POST["pass"];
$pass2 = $_POST["pass2"];
$profile = $_POST["profile"];

if ($user=="" or $pass=="" or $pass !== $pass2 or $profile==""){
	$msg = "<br/><b>Preencha todos os campos, verifique a senha e tente novamente!</b>";
	header("Location: cadastrar.php?m=$msg");
}

$conexao = mysqli_connect("localhost","root","","sportschool");

$sql = "INSERT INTO usuarios (login, senha, tipo) VALUES ('$user', '$pass', '$profile')";
$resultado = mysqli_query($conexao, $sql);

if($resultado == TRUE){
    $msg = "<p><b>Usuário cadastro com sucesso.<b></p>";
    header("Location: usuarios.php?m=$msg");
}
else{
    $msg = "<p><b>Não foi possível cadastrar o usuário. Verifique com o Administrador!<b></p>";
    header("Location: usuarios.php?m=$msg");
}
?>