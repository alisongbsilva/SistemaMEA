<?php
//pega os dados do formulario
$user = $_POST['user'];
$pass = $_POST['pass'];

//verifica se estao vazias
if ($user=="" or $pass==""){
    //caso esteja, volta pra pagina de login com erro
    $msg = "<p>Preencha todos os campos!</p>";
    header("location: login.php?msg=$msg");
}
//echo "Login e senha definidos!";

//cria conexao com banco de dados
$database = new PDO("mysql:host=localhost;dbname=sportschool", "root", "");

//veirfica se a conexao foi bem sucedida
if ($database){
    echo "Conexão bem sucedida";
} else{
    echo "Falha na conexão";
}

//prepara a query sql
$sql = "SELECT * FROM usuarios WHERE login = '$user' AND senha = '$pass'";

//cria uma variavel para contar logins
$count = 0;

//executa a query
$query = $database->query($sql);

//conta o numero de logins com o mesmo user e senha
foreach ($query as $linha){
    $count++;
}
$tipo = "";
//valida os logins
if ($count == 0){
    $msg = "Usuário ou Senha inválidas! Preencha novamente.";
    header("location: login.php?msg=$msg");
} else if($count == 1){
    $tipo = $linha['tipo'];
    session_start();
    //verifica tipo do usuario
    if ($tipo == "1"){
        $_SESSION['id'] = $linha['id'];
        $_SESSION['tipo'] = $tipo;
        header("location: principal/index.php");
    } else {
        $_SESSION["id"] = $linha["id"];
        $_SESSION["tipo"] = $tipo;
        header("location: teacher/index.php"); 
    }
        
} else {
    $msg ="Usuário duplicado, contate o administrador do sistema.";
    header("location: login.php?msg=$msg");
}
?>