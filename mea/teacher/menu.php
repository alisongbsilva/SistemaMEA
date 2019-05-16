<?php 
    include ("../enginevalida.php");
    valida("0");
?>
<html>
	<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/mainstyle.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
		<link rel="icon" href="../css/icon.ico" type="image/x-icon"/>
		<link rel="shortcut	icon" href="../css/icon.ico" type="image/x-icon"/>
	</head>
<body>

<div class="main">
    <div id="logo"><img src="../css/logomea.png"></div>
	<div class="button-box">
		<a href="index.php"><button class="main-button">Home</button></a>
		<a href="usuarios.php"><button class="main-button">Configurações</button></a>
	</div>
    <div class="logout">
        <a href="../enginelogout.php"><button class="main-button"> Finalizar Sessão </button></a>
    </div>
</div>
</body>
</html>