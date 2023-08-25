<html>
	<?php
	require("../Model/acessaBD.php");
    	if(confereCadastro($_POST['user'], $_POST['password'])){
    	    echo "Login realizado com sucesso!";
    	    echo  "<form action='../View/perfil.php' method='post'>";
    	    echo "<input type='submit' class='btn btn-light' value='Entrar'>";
    	    echo "</form>";
    	   
    	   session_start();
    	   $_SESSION['user'] = $_POST['user'];
	       $_SESSION['password'] = $_POST['password'];
    	}
    	else{
    	    echo "Nome ou senha não existem";
    	    echo  "<form action='../View/index.html' method='post'>";
    	    echo "<input type='submit' class='btn btn-light' value='Tentar novamente'>";
    	    echo "</form>";
    	}	
	?>
</html>


