<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/loginstyle.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
		<title>Sistema MEA</title>
		<link rel="icon" href="css/icon.ico" type="image/x-icon"/>
		<link rel="shortcut	icon" href="css/icon.ico" type="image/x-icon"/>
	</head>
	<body>
		<div class="bg"></div>
			<div id="content">
			<fieldset id="content-box">
                <form action="enginelogin.php" method="post">
				<h2>Login</h2>
				<div id="text">
				<p>&emsp;&emsp;Usuário:&nbsp;&emsp;<input type="text" name="user" autofocus="autofocus" required></p>
				<p>&emsp;&emsp;Senha: &nbsp;&nbsp;&emsp;<input type="password" name="pass" required></p>
                <?php
                if(isset($_GET['msg'])){
                    echo $_GET['msg'];
                }
                ?>
				</div>
				<div id="button-right"><input type="submit" value="Entrar" class="button"> <input type="reset" value="Limpar" class="button"></div>
                </form> 
			</fieldset>
			</div>
        <br>
	</body>
</html>