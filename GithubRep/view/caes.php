<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" sizes="160x160" href="https://static.wikia.nocookie.net/library-of-ruina/images/8/85/Limbus_Company_site_logo.png/revision/latest?cb=20230803192732">

    <link rel="stylesheet" href="style.css">
    
    <!--BootStrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <title>Document</title>
</head>
<body>
	<div id="menu">
		<ul>
			<li><img src="imagens/logoMenu.png" width="100% "/></li>
			<li><a href= "perfil.php"><img src="imagens/iconeHome.png" width="20%" title="Perfil"/></a></li>
			<li><a href= "amigos.php"><img src="imagens/iconeAmigos.png" width="20%" title="Amigos"/></a></li>
			<li><a href= "caes.php"><img src="imagens/iconeCaes.png" width="20%" title="Cães"/></a></li>
			<li><a href= "index.html"><img src="imagens/sair.png" width="20%" title="Sair"/></a></li>				
		</ul>
	</div>		
	<br>
	<div id="conteudo">
		<form action="../Controller/salvaAmigos.php" method="post">			
			<?php 
				require("../Model/acessaBD.php");
		 		session_start();
		  		exibeTodosOsCaes($_SESSION['user'],$_SESSION['password']);
			?>		
		</form>
	</div>
</body>
</html>