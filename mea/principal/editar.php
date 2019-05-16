<!DOCTYPE html>
<?php 
    include ('menu.php'); 
    $id = $_GET['i'];
    $conexao = mysqli_connect("localhost", "root", "", "sportschool");
    $script = "SELECT * FROM alunos WHERE idAluno = $id";
    $resultado = mysqli_query($conexao, $script);
    $arResultado = mysqli_fetch_assoc($resultado);
?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
		<title>Editar Aluno</title>
		<link rel="icon" href="../css/icon.ico" type="image/x-icon"/>
		<link rel="shortcut	icon" href="../css/icon.ico" type="image/x-icon"/>
	</head>
	<body>
		<div class="bg"></div>
		<form method="post" action="engineeditar.php">
			<div id="content">
            <fieldset id="content-box">
				<h2>Editar cadastro de aluno</h2>
                <div id="text">
                    <p><input type="hidden" name='id' value="<?php echo $arResultado["idAluno"]; ?>"></p>
                    <p>Matrícula:<br/>
                    <input type='number' name='regist' value="<?php echo $arResultado["matricula"]; ?>" autofocus></p>
                    <p>Nome:<br/>
                    <input type='text' name='name' value="<?php echo $arResultado["nome"]; ?>"></p>
                    <p>Idade:<br/>
                    <select name="age" required>
                        <option value="<?php echo $arResultado["idade"]; ?>" selected><?php echo $arResultado["idade"]; ?></option>
                        <option value="4"s>4</option>
                        <option value="5"s>5</option>
                        <option value="6"s>6</option>
                    </select></p>
                    <p>Turma:<br/>
                    <select name="class" required>
                        <option value="<?php echo $arResultado["turma"]; ?>" selected><?php echo $arResultado["turma"]; ?></option>
                        <option value="A1"s>A1</option>
                        <option value="A2"s>A2</option>
                        <option value="A3"s>A3</option>
                    </select></p>
                    <p>Modalidade:<br/>
                    <select name="modality" required>
                        <option value="<?php echo $arResultado["modalidade"]; ?>" selected><?php echo $arResultado["modalidade"]; ?></option>
                        <option value="Balé">Balé</option>
                        <option value="Futebol"s>Futebol</option>
                        <option value="Karatê">Karatê</option>
                        <option value="Balé">Natação</option>
                        <option value="Xadrez">Xadrez</option>
                    </select></p>
                    <p>Turno:<br/>
                    <select name="schedule" required>
                        <option value="<?php echo $arResultado["turno"]; ?>" selected><?php echo $arResultado["turno"]; ?></option>
                        <option value="Matutino"s>Matutino</option>
                        <option value="Vespertino">Vespertino</option>
                    </select></p>
                    <p>Responsável:<br/>
                    <input type='text' name='respons' value="<?php echo $arResultado["responsavel"]; ?>"></p>
                </div>
                <div id="button-left"><a href="editaraluno.php"><button type="button" class="button">Voltar</button></a></div>
                <div id="button-right"><a href="engineeditar.php"><input type="submit" class="button" value="Salvar"></a></div>
            </fieldset>
            </div>
        </form>
	</body>
</html> 
<?php include ('footer.php'); ?>