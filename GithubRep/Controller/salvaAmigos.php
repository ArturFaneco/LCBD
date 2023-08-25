<?php
    require("../Model/acessaBD.php");
    session_start();
    $user= $_SESSION['user'];
    $password= $_SESSION['password'];
    
    $user2 = $_POST['user2'];
    $password2 =$_POST['password2'];
    
    if(salvaAmizade($user,$password,$user2,$password2)){
        echo "<form action='../View/caes.php' method='post'>";
        echo "<input type='submit' class='btn btn-light' value='Voltar para o site'>";
        echo "</form>"; 
    }
    else{
        echo "Erro no envio da solicitação de amizade";
        echo  "<form action='../View/caes.php' method='post'>";
        echo "<input type='submit' class='btn btn-light' value='Tentar novamente'>";
        echo "</form>";
    }
    
?>

