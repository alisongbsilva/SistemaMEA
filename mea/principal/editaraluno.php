<!DOCTYPE html>
<?php 
    include ('menu.php'); 
    $conexao = mysqli_connect("localhost","root","","sportschool");
    $sql = "SELECT * FROM lista";
    $resultado = mysqli_query($conexao, $sql);

    $arResultado = mysqli_fetch_assoc($resultado);
?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
		<title>Editar Cadastros</title>
		<link rel="icon" href="../css/icon.ico" type="image/x-icon"/>
		<link rel="shortcut	icon" href="../css/icon.ico" type="image/x-icon"/>
	</head>
	<body>
		<div class="bg"></div>
		<form>
			<div id="content">
            <fieldset id="content-box">
				<h2>Editar cadastros</h2>
                <div id="text">
                    <table>
                        <tr>
                            <th>Matrícula</th>
                            <th>Nome</th>
                            <th>Idade</th>
                            <th>Turma</th>
                            <th>Modalidade</th>
                            <th>Turno</th>
                            <th>Responsável</th>
                            <th>Ações</th>
                        </tr>
                    <?php do{ ?>
                        <tr>
                            <td><?php echo $arResultado['matricula']?></td>
                            <td><?php echo $arResultado['nome']?></td>
                            <td><?php echo $arResultado['idade']?></td>
                            <td><?php echo $arResultado['turma']?></td>
                            <td><?php echo $arResultado['modalidade']?></td>
                            <td><?php echo $arResultado['turno']?></td>
                            <td><?php echo $arResultado['responsavel']?></td>
                            <td><a href="editar.php?i=<?php echo $arResultado['idAluno']?>"><button type="button" class="button2">Editar</button></a><a href="confirmaraluno.php?i=<?php echo $arResultado['idAluno']?>&n=<?php echo $arResultado['nome']?>&m=<?php echo $arResultado['matricula']?>"><button type="button" class="button2">Remover</button></a></td>
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
                <div id="button-left"><a href="index.php"><button type="button" class="button">Voltar</button></a></div>
            </fieldset>
            </div>
        </form>
	</body>
</html> 
<?php include ('footer.php'); ?>