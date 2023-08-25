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
	
	<div id="cadastro">
		<h1>Atualizar Perfil</h1><br>
		<form method="post" action="../Controller/Atualizar.php" enctype="multipart/form-data" id="usrform"><br>
			<div class="row">
				<div class="col-md-6">
                    
					<input type="text"  value= "<?php echo $dados['user']?>"   name="user"></br></br>
					<input type="password" placeholder="password" name="password"></br></br>
					<!--<input type="text"  value= "<?php/* echo $dados['email']*/?>"   name="email"></br></br>
					<label>Data de Nascimento</label>
					<input id="data" type ="date" name="data" value= "<?php/* echo $dados['dataDeNascimento']*/?>"/>
					<textarea id="descricao" name="descricao"  form="usrform" <br><br>
					><?php/* echo $dados['descricao']*/?></textarea>-->
					
				</div>
	  
                <!--<div class="col-md-6"> 
                    Coloque uma foto:</br>
                    <img id="uploadPreview" style="width: 120px; height: 100px;" src=<?php echo "./imagens/".$dados['foto'] ?> /></br>
                    <input id="uploadImage" type="file" name="foto" onchange="PreviewImage();" />
                        
                    <script type="text/javascript">
                        function PreviewImage() {
                            var oFReader = new FileReader();
                            oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
                            oFReader.onload = function (oFREvent) {
                                document.getElementById("uploadPreview").src = oFREvent.target.result;
                            };
                        };
                    </script>
                </div>-->
			</div>
		</form>
	</div>
</body>
</html>