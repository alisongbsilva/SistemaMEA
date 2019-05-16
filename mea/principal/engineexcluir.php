<?php
$id = $_GET['i'];
$conexao = mysqli_connect("localhost", "root", "", "sportschool");
$sql = "DELETE FROM alunos WHERE idAluno='$id' ";
$resultado = mysqli_query($conexao, $sql);
 
if(!$conexao){
    $msg = "Erro ao conectar no BD - Remoção de Cadastro";
    header("Location: editaraluno.php?m=$msg");
    exit;
}	

if($resultado){    
    $msg = "<p>Cadastro removido com sucesso.</p>";
    header("Location: editaraluno.php?m=$msg");
    exit;
}else{
    $msg = "<p>Não foi possível excluir o registro do Aluno.</p>";
    header ("Location: editaraluno.php?m=$msg");
    exit;
}
?>