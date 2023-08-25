<html>
<?php
	require("../Model/acessaBD.php");
	session_start();
	$nomeAntigo=$_SESSION['user'];
	$senhaAntiga = $_SESSION['password'];

	//Upload image to server paste
	/*move_uploaded_file($_FILES['foto']['tmp_name'],'../View/imagens/'.$_FILES['foto']['name']);*/

	if(atualizaPerfil(
	    $nomeAntigo, $senhaAntiga,
	    $_POST['user'], $_POST['password'],
		/*$_POST['telefone'],$_POST['data'], */
		$_POST['descricao'])){

        $_SESSION['user'] = $_POST['user'];
        $_SESSION['password'] = $_POST['password'];     
        echo "<form action='../View/perfil.php' method='post'>";
        echo "<input type='submit' class='btn btn-light' value='Voltar para o site'>";
        echo "</form>";
	}
	else{
	    echo "Erro na atualização";
	    echo  "<form action='../View/index.html' method='post'>";
	    echo "<input type='submit' class='btn btn-light' value='Tentar novamente'>";
	    echo "</form>";
	}	
?>
</html>