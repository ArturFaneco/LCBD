<?php
$host = "localhost";
$dbuser = "root";
$dbpass = "";
$conection;

try {
    $conection = new PDO("mysql:host=$host", $dbuser, $dbpass);
    
    $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $conection->exec("CREATE DATABASE limbus01");
    
    echo "Conexão realizada com sucesso";
}
catch(PDOException $e)    {
    echo "Conexão falhou: " . $e->getMessage();
}
$conection = null;
?>