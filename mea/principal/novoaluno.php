<!DOCTYPE html>
<?php include ('menu.php'); ?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
		<title>Cadastrar Aluno</title>
		<link rel="icon" href="../css/icon.ico" type="image/x-icon"/>
		<link rel="shortcut	icon" href="../css/icon.ico" type="image/x-icon"/>
	</head>
	<body>
		<div class="bg"></div>
		<form method="post" action="enginenovoaluno.php">
			<div id="content">
            <fieldset id="content-box">
				<h2>Cadastrar aluno</h2>
                <div id="text">
                    <p>Matrícula:<br/>
                    <input type="number" name="regist" min="0001" max="9999" required autofocus></p>
                    <p>Nome do aluno:<br/>
                    <input type="text" name="name" required></p>
                    <p>Idade:<br/>
                    <select name="age" required>
                        <option value="" selected>-Selecione-</option>
                        <option value="4"s>4</option>
                        <option value="5"s>5</option>
                        <option value="6"s>6</option>
                    </select></p>
                    <p>Turma:<br/>
                    <select name="class" required>
                        <option value="" selected>-Selecione-</option>
                        <option value="A1"s>A1</option>
                        <option value="A2"s>A2</option>
                        <option value="A3"s>A3</option>
                    </select></p>
                    <p>Modalidade<br/>
                    <select name="modality" required>
                        <option value="" selected>-Selecione-</option>
                        <option value="Balé">Balé</option>
                        <option value="Futebol"s>Futebol</option>
                        <option value="Karatê">Karatê</option>
                        <option value="Balé">Natação</option>
                        <option value="Xadrez">Xadrez</option>
                        </select></p>
                    <p>Turno:<br/>
                    <select name="schedule" required>
                        <option value="" selected>-Selecione-</option>
                        <option value="Matutino"s>Matutino</option>
                        <option value="Vespertino">Vespertino</option>
                        </select></p>
                    <p>Nome do responsável:<br/>
                    <input type="text" name="respons" required></p>
                    <?php
                        if(empty($_GET['m'])){

                        }
                        else{
                            echo $_GET["m"];
                        }
                    ?>
                </div>
                <div id="button-left"><a href="index.php"><button type="button" class="button">Voltar</button></a></div>
                <div id="button-right"><input type="submit" value="Efetuar Cadastro" class="button"></div>
            </fieldset>
            </div>
        </form>
	</body>
</html> 
<?php include ('footer.php'); ?>