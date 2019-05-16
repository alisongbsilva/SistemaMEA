<?php
    $id = $_POST["id"];
    $oldpass = $_POST["oldpass"];
    $newpass = $_POST["newpass"];
    $newpass2 = $_POST["newpass2"];
	$conexao = mysqli_connect("localhost", "root", "", "sportschool");
	$script = "SELECT * FROM usuarios WHERE id = $id";
	$resultado = mysqli_query($conexao, $script);
	$arResultado = mysqli_fetch_assoc($resultado);	
    //echo "$id, $oldpass, $newpass, $newpass2";
    //exit;
    if($oldpass=="" or $newpass=="" or $newpass !== $newpass2){
        $msg = "<br/><b>Preencha todos os campos e tente novamente!</b>";
        header("Location: senha.php?m=$msg");
    }else{
        if ($oldpass !== $arResultado["senha"]){
            $msg = "<br/><b>Senha atual não confere, Insira a senha correta e tente novamente!</b>";
            header("Location: senha.php?m=$msg");
        }   
    }

    if(!$conexao){
        $msg = "Erro ao conectar no BD - Editar Senha";
        header("Location: senha.php?m=$msg");
        exit;
    }	

    $sql = "UPDATE usuarios SET senha='$newpass' where id='$id' ";
    $resultado = mysqli_query($conexao, $sql);
    
    if($resultado){
        $msg = "<p>Sua senha foi atualizada com sucesso.</p>";
        header("Location: usuarios.php?m=$msg");
        exit;
    }else{
        $msg = "<p>Não foi possível atualizar sua senha.</p>";
        header("Location: usuarios.php?m=$msg");
        exit;
    }	
?>