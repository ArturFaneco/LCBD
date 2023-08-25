<?php
$host = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "limbus01";
$conection;

try {
    $conection = new PDO("mysql:host=$host;dbname=$dbuser", $dbpass, $dbname);
    
    //na linha a seguir é definido que se algum erro ocorrer, deve ser lançado uma exceção.
    
    $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Conexão realizada com sucesso";
}
catch(PDOException $e)    {
    echo "Conexão falhou: " . $e->getMessage();
}

try{
    // sql para create table
    $stm = "CREATE TABLE `amizades` (
        `user` varchar(255),
        `password` varchar(255),
        `user2` varchar(255),
        `password2` varchar(255)
    )";

    
    $conection->exec($stm);
    echo "Tabela criada com sucesso";
}
catch(PDOException $e){
    echo $stm . "<br>" . $e->getMessage();
}

//fechando a conexão
$conection = null;
?>