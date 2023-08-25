<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" sizes="160x160" href="https://static.wikia.nocookie.net/library-of-ruina/images/8/85/Limbus_Company_site_logo.png/revision/latest?cb=20230803192732">

    <link rel="stylesheet" href="style.css">

    <title>Perfil</title>

</head>
<body>
    <script>
        let sum = 0;

        for (let i = 1; i <= 1000; i += 2){
            sum += i;
        }
        console.log(sum);
        document.write("A soma de todos os Inteiros Impares é "+ sum +" !")
    </script>
	<div id="menu">
		<ul>
		    <li><img src="imagens/logoMenu.png" width="100% "  /></li>
			<li><a href= "perfil.php"><img src="imagens/iconeHome.png" width="20%" title="Perfil"/></a></li>
			<li><a href= "amigos.php"><img src="imagens/iconeAmigos.png" width="20%" title="Amigos"/></a></li>
			<li><a href= "caes.php"><img src="imagens/iconeCaes.png" width="20%" title="Cães"/></a></li>
			<li><a href= "index.html"><img src="imagens/sair.png" width="20%" title="Sair"/></a></li>				
		</ul>
	</div>		
	</br></br>
	<?php 
		require("../Model/acessaBD.php");
		session_start();
		$dados = retornaDadosDoPerfil($_SESSION['user'],$_SESSION['password']);
	?>
	<div id="perfil">
		<table>
			<tr>
				<td colspan=2><h2><p align="center"><?php echo $dados['user']?></p></h2></td>
			</tr>
			<tr>
				<!--<td width=40%> <img src="<?php/* echo "./imagens/".$dados['foto']?>" width=100%/></td>
				<td> <?php/* echo "Raça: ". $dados['raca']*/?> <br> 
				<?php/* echo "Sexo: ".$dados['sexo']*/?> <br> 
				<?php /*
					list ($ano, $mes, $dia) = explode('-', $dados['dataDeNascimento']);
					echo "Data de Nascimento: $dia / $mes / $ano";
				?> <br> 
				<?php echo "Telefone: ".$dados['telefone']*/?> </td>
				</tr>
				<tr style="border:1pt solid black;">
					<td colspan=2><p align="center"><?php echo $dados['descricao']?></td>
				</tr>-->
			<tr>
				<td colspan=2>
					<br><br>
					<p align=right><a href="atualizarPerfil.php" class="btn btn-danger active" role="button">
						Atualizar Perfil</a></p>
				</td>
			</tr>
		</table>	
	</div>
		
</body>
</html>