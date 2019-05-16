<!DOCTYPE html>
<?php include ('menu.php'); ?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
		<title>Cadastro de Usuário</title>
		<link rel="icon" href="../css/icon.ico" type="image/x-icon"/>
		<link rel="shortcut	icon" href="../css/icon.ico" type="image/x-icon"/>
	</head>
	<body>
		<div class="bg"></div>
		<form method="post" action="enginenovousuario.php">
			<div id="content">
			<fieldset id="content-box">
				<h2>Cadastro de usuário</h2>
				<div id="text">
				<p>Usuário:<br/>
                    <input type="text" name="user" autofocus="autofocus" required></p>
				<p>Senha:<br/>
                    <input type="password" name="pass" required></p>
				<p>Confirmar senha:<br/>
                    <input type="password" name="pass2" required></p> 
				<p>Perfil:<br/>
                    <select name="profile" required>
						<option value="" selected>-Selecione-</option>
						<option value="1">Diretor</option>
						<option value="0">Professor(a)</option>
					</select></p>
					<?php
                        if(empty($_GET['m'])){

                        }
                        else{
                            echo $_GET["m"];
                        }
                    ?>
				</div>
				<div id="button-left"><a href="usuarios.php"><button type="button" class="button">Voltar</button></a></div>
				<div id="button-right"><input type="reset" value="Limpar" class="button"><input type="submit" value="Cadastrar" class="button"></div>
            </fieldset>
            </div>
        </form>
	</body>
</html>
<?php include ('footer.php'); ?>