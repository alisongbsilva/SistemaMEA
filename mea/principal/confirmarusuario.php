<!DOCTYPE html>
<?php 
    include ('menu.php');
    $id = $_GET["i"];
    $login = $_GET["u"];
?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
		<title>Remoção de Usuário</title>
		<link rel="icon" href="../css/icon.ico" type="image/x-icon"/>
		<link rel="shortcut	icon" href="../css/icon.ico" type="image/x-icon"/>
	</head>
	<body>
		<div class="bg"></div>
		<form>
			<div id="content">
            <fieldset id="content-box">
				<h2>Confirmar remoção de usuário</h2>
                <div id="text">
                  <p></p>
                   <?php
                    echo "<p>Realmente deseja remover o usuário: <strong>$login</strong> ?</p>";
                   ?>
                </div>
                <div id="button-left"><a href="apagarusuario.php"><button type="button" class="button">Não</button></a></div>
                <div id="button-right"><a href="engineapagarusuario.php?i=<?php echo $id;?>"><button type="button" class="button">Sim</button></a></div>
            </fieldset>
            </div>
        </form>
	</body>
</html> 