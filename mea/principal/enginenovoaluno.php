<?php
$regist = $_POST["regist"];
$name = $_POST["name"];
$age = $_POST["age"];
$class = $_POST["class"];
$modality = $_POST["modality"];
$schedule = $_POST["schedule"];
$respons = $_POST["respons"];

if ($regist=="" or $name=="" or $age=="" or $class=="" or $modality=="" or $schedule=="" or $respons==""){
	$msg = "<br/><b>Preencha todos os campos e tente novamente!</b>";
	header("Location: novoaluno.php?m=$msg");
}

$conexao = mysqli_connect("localhost","root","","sportschool");

$sql = "INSERT INTO alunos (matricula, nome, idade, turma, modalidade, turno, responsavel) VALUES ('$regist', '$name', '$age', '$class', '$modality', '$schedule', '$respons')";

$resultado = mysqli_query($conexao, $sql);

if($resultado == TRUE){
    $msg = "<p><b>Aluno cadastro com sucesso.<b></p>";
    header("Location: index.php?m=$msg");
}
else{
    $msg = "<p><b>Não foi possível cadastrar o aluno. Verifique com o Administrador!<b></p>";
    header("Location: index.php?m=$msg");
}
?>