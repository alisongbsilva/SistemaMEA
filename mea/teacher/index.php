<!DOCTYPE html>
<?php 
    include ('menu.php');
    $id = $_SESSION["id"];
    $conexao = mysqli_connect("localhost", "root", "", "sportschool");
	$script = "SELECT * FROM usuarios WHERE id = $id";
	$resultado = mysqli_query($conexao, $script);
	$arResultado = mysqli_fetch_assoc($resultado);
?>v
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
		<title>Sistema MEA</title>
		<link rel="icon" href="../css/icon.ico" type="image/x-icon"/>
		<link rel="shortcut	icon" href="../css/icon.ico" type="image/x-icon"/>
	</head>
	<body>
		<div class="bg"></div>
		<form>
			<div id="content">
            <fieldset id="content-box">
				<h2>Bem-vindo, <?php echo $arResultado["login"]; ?></h2>
                <div id="text">
                    <h3>Matrícula Esportiva do Aluno</h3>
                    <div class="list-box">
                        <a href="novoaluno.php"><button class="button-list" type="button">Cadastrar aluno</button></a><br/>
                        <a href="alunos.php"><button type="button" class="button-list">Listar alunos</button></a>
                    </div>
                    <?php
                        if(!empty($_GET['m'])){
                            echo $_GET["m"];
                        }
                    ?>
                </div>
            </fieldset>
            </div>
        </form>
	</body>
</html> 
<?php include ('footer.php'); ?>