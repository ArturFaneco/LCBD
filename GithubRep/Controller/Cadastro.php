<html>
<?php
	require("../Model/acessaBD.php");

	//Upload image to server paste
	/*move_uploaded_file($_FILES['foto']['tmp_name'],'../View/imagens/'.$_FILES['foto']['name']);*/

	if(insereNovoCachorro(
	    $_POST['user'], 
	    /*$_POST['email'], */
	    $_POST['password'], /*
	    $_POST['telefone'], 
	    $_POST['data'],
	    $_POST['descricao'],
	    $_FILES['foto']['name']*/)){
        session_start();
        $_SESSION['user'] = $_POST['user'];
	$_SESSION['password'] = $_POST['password'];
				
	       
        echo  "<form action='../View/perfil.php' method='post'>";
        echo "<input type='submit' class='btn btn-light' value='Entrar'>";
        echo "</form>";
	}
	else{
	    echo "Erro no cadastro";
	    echo  "<form action='../View/index.html' method='post'>";
	    echo "<input type='submit' class='btn btn-light' value='Tentar novamente'>";
	    echo "</form>";
	}	
?>
</html>


