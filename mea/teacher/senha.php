<!DOCTYPE html>
<?php 
    include ('menu.php'); 
    $id = $_SESSION['id'];
?>
<html>
    <head>
        <meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
        <title>Redefinir Senha</title>
        <link rel="icon" href="../css/icon.ico" type="image/x-icon"/>
		<link rel="shortcut	icon" href="../css/icon.ico" type="image/x-icon"/>
    </head>
    <body>
        <div class="bg"></div>
        <form method="post" action="enginesenha.php">
            <div id="content">
            <fieldset id="content-box">
                <h2>Redefinir senha</h2>
                <div id="text">
                    <p><input type="hidden" name="id" value="<?php echo $id; ?>"></p>
                    <p>Senha atual:<br/>
                            <input type="password" name="oldpass" autofocus required></p>
                    <p>Nova senha:<br/>
                        <input type="password" name="newpass" required></p>
                    <p>Confirmar nova senha:<br/>
                        <input type="password" name="newpass2" required></p>
                    <?php
                        if(!empty($_GET['m'])){
                            echo $_GET["m"];
                        }
                        ?>
                </div>
                <div id="button-left"><a href="usuarios.php"><button type="button" class="button">Voltar</button></a></div>
                <div id="button-right"><input type="reset" class="button" value="Limpar"> <input type="submit" value="Prosseguir" class="button"></div>
            </fieldset>
            </div>
        </form>
    </body>
</html>
<?php include ('footer.php'); ?>