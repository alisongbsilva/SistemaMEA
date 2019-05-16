<!DOCTYPE html>
<?php 
    include ('menu.php');
    $conexao = mysqli_connect("localhost","root","","sportschool");
    $sql = "SELECT * FROM  contas";
    $resultado = mysqli_query($conexao, $sql);

    $arResultado = mysqli_fetch_assoc($resultado);
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
				<h2>Usuários Cadastrados</h2>
                <div id="text">
                   <table>
                        <tr>
                            <th>Usuário</th>
                            <th>Função</th>
                            <th>Ação</th>
                        </tr>
                    <?php do{ ?>
                        <tr>
                            <td><?php echo $arResultado['login']?></td>
                            <?php 
                                if($arResultado["tipo"]=="1"){
                                    echo "<td>Diretor</td>";
                                }else{
                                    echo "<td>Professor</td>";
                                }
                             ?>
                            <td><a href="confirmarusuario.php?i=<?php echo $arResultado['id']?>&u=<?php echo $arResultado['login']?>"><button type="button" class="button2">Remover</button></a></td>
                        </tr>
                    <?php
                    }while($arResultado = mysqli_fetch_assoc($resultado));
                    ?>			
                    </table>
                    <?php
                    if(!empty($_GET['m'])){
                        echo $_GET["m"];
                    }
                    ?>
                </div>
                <div id="button-left"><a href="usuarios.php"><button type="button" class="button">Voltar</button></a></div>
            </fieldset>
            </div>
        </form>
	</body>
</html> 
<?php include ('footer.php'); ?>