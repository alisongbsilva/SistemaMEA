<?php
$id = $_POST["id"];
$regist = $_POST["regist"];
$name = $_POST["name"];
$age = $_POST["age"];
$class = $_POST["class"];
$modality = $_POST["modality"];
$schedule = $_POST["schedule"];
$respons = $_POST["respons"];
		
if ($regist=="" or $name=="" or $age=="" or $class=="" or $modality=="" or $schedule=="" or $respons==""){
	$msg = "<br/><b>Preencha todos os campos e tente novamente!</b>";
	header("Location: editaraluno.php?m=$msg");
}
			
$conexao = mysqli_connect("localhost", "root", "", "sportschool");
	
if(!$conexao){
    $msg = "Erro ao conectar no BD - Editar Aluno";
    header("Location: editaraluno.php?m=$msg");
    exit;
}	

$sql = "UPDATE alunos SET matricula='$regist', nome='$name', idade='$age', turma='$class', modalidade='$modality', turno='$schedule', responsavel='$respons' where idAluno='$id' ";
$resultado = mysqli_query($conexao, $sql);

if($resultado){
    $msg = "<p>Cadastro atualizado com sucesso.</p>";
    header("Location: editaraluno.php?m=$msg");
    exit;
}else{
    $msg = "<p>Não foi possível atualizar o cadastro do aluno.</p>";
    header("Location: editaraluno.php?m=$msg");
    exit;
}	
?>