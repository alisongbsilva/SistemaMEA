<!DOCTYPE html>
<?php include ("menu.php"); ?>
<html>
    <head>
        <meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
        <title>Gerenciar Sistema</title>
        <link rel="icon" href="../css/icon.ico" type="image/x-icon"/>
		<link rel="shortcut	icon" href="../css/icon.ico" type="image/x-icon"/>
    </head>
    <body>
        <div class="bg"></div>
        <form>
            <div id="content">
            <fieldset id="content-box">
                <h2>Gerenciar sistema</h2>
                <div id="text">
                    Minha conta<br/><br/>
                    <div class="list-box">
                        <a href="senha.php"><button type="button" class="button-list">Redefinir senha</button></a><br/><br/>
                    </div>
                    Gerenciar contas<br/><br/>
                    <div class="list-box">
                        <a href="cadastrousuario.php"><button type="button" class="button-list">Cadastrar usuário</button></a><br/>
                        <a href="apagarusuario.php"><button type="button" class="button-list">Listar usuários</button></a>
                    </div>
                    <?php
                        if(empty($_GET['m'])){

                        }
                        else{
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