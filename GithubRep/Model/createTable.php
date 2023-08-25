<?php
$host = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "limbus01";
$conection;

try {
    $conection = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpass);
    
    //na linha a seguir é definido que se algum erro ocorrer, deve ser lançado uma exceção.
    
    $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Conexão realizada com sucesso";
}
catch(PDOException $e)    {
    echo "Conexão falhou: " . $e->getMessage();
}

try{
    // sql para create table
    $stm = "CREATE TABLE `users` (
        `user` varchar(255) NOT NULL,
        /*`email` varchar(255) NOT NULL,*/
        `password` varchar(255) NOT NULL,
        /*'dataDeNascimento` varchar(255) NOT NULL,
        `descricao` varchar(255) NOT NULL,
        `foto` varchar(255) NOT NULL,*/
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