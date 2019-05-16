<?php
    $id = $_GET['i'];
    $conexao = mysqli_connect("localhost", "root", "", "sportschool");
    $sql = "DELETE FROM usuarios WHERE id='$id' ";
    $resultado = mysqli_query($conexao, $sql);
    echo "$sql";

    if(!$conexao){
        $msg = "Erro ao conectar no BD - Remoção de Usuário";
        header("Location: apagarusuario.php?m=$msg");
        exit;
    }	

    if($resultado){    
        $msg = "<p>Usuário removido com sucesso.</p>";
        header("Location: apagarusuario.php?m=$msg");
        exit;
    }else{
        $msg = "<p>Não foi possível excluir o registro do usuário.</p>";
        header ("Location: apagarusuario.php?m=$msg");
        exit;
    }
?>