<?php
$host = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "limbus01";
$conection;

try {
    $conection = new PDO("mysql:host=$host; dbname=$dbname", $dbuser, $dbpass);
    $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexão realizada com sucesso";
}
catch(PDOException $e){
    echo "Conexão falhou: " . $e->getMessage();
}

try{
    function insereNovoCachorro($user,$password,){
        global $conection;
        
        $stm = $conection->prepare("INSERT INTO users(user,password) VALUES (:user,:password)");
        
        $stm->bindParam(':user', $user);
        /*$stm->bindParam(':email', $email);*/
        $stm->bindParam(':password', $password);
        
        $stm->execute();
        
        echo "Cadastro realizado com sucesso!";
        return true;
    }
    
    function confereCadastro($user,$password){
        global $conection;
        
        $rs = $conection->query("SELECT user FROM users WHERE user='$user' AND password='$password'");
        if($rs->rowCount()>0){
            return true;
        }
        else{
            return false;
        }
    }
    
    
    function retornaDadosDoPerfil($user,$password){
        global $conection;
        $dadosPerfil="sem dados";
        
        $rs = $conection->query("SELECT * FROM users WHERE user='$user' AND password='$password'");
        while($row = $rs->fetch(PDO::FETCH_OBJ)){
            $dadosPerfil = array(
                "user"=>$row->user,
                /*"email"=>$row->email,*/
                "password"=>$row->password,  
                
            );
        }
        return $dadosPerfil;
    }
    
    /*function atualizaPerfil($userAntigo,$emailAntiga,$user,$email,$password,$branch,$dataDeNascimento, 
        $descricao, $foto, $sexo){
        
        global $conection;
        
        $stmt = $conection->prepare("UPDATE cachorros SET 
        user = :user, email = :email, password = :password, branch =:branch, dataDeNascimento =:dataDeNascimento,
        descricao =:descricao, foto=:foto, sexo=:sexo 
        WHERE user=:userAntigo and email=:emailAntiga");
        
        $stmt->bindParam(':user', $user);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        
        $stmt->execute();
        
        echo "Atualização realizada com sucesso!";
        return true;
    }
    
    function exibeTodosOsCaes($user,$email){
        global $conection;      
        $rs = $conection->query("SELECT * FROM cachorros WHERE user!='$user' OR email!='$email'");
        while($row = $rs->fetch(PDO::FETCH_OBJ)){  
           echo "<form action='../Controller/salvaAmigos.php' method='post'>";
           list ($ano, $mes, $dia) = explode('-', $row->dataDeNascimento);
           echo "<h4>$row->user - $row->password - $row->sexo <br> Data de Nascimento: $dia / $mes / $ano </h4>";
           echo "<img src='imagens/$row->foto' width='20%'/> $row->descricao <br><br>";
           echo "<input type=hidden name=user2 value='$row->user'>";
           echo "<input type=hidden name=email2 value='$row->email'>";
           echo "<input type='submit' class='btn btn-danger' value='Enviar pedido de amizade'></br><br>";
           echo "</form>";
        }
    }
    
    function salvaAmizade($user,$email,$user2,$email2){
        global $conection;
        
        $stm = $conection->prepare("INSERT INTO amizades(user,email,user2,email2) 
                VALUES (:user,:email,:user2,:email2)");
        
        $stm->bindParam(':user', $user);
        $stm->bindParam(':email', $email);
        $stm->bindParam(':user2', $user2);
        $stm->bindParam(':email2', $email2);
        
        $stm->execute();
        
        echo "Solicitação de amizade enviada com sucesso";
        return true;
    }
    
    function exibeAmigos($user,$email){
        global $conection;      
        $rs = $conection->query("SELECT * FROM cachorros WHERE user in (SELECT user FROM amizades WHERE user2 = '$user')");
        while($row = $rs->fetch(PDO::FETCH_OBJ)){
           $rs2 = $conection->query("SELECT * FROM amizades WHERE user = '$user' AND user2= '$row->user'");
            if($rs2->rowCount()>0){
                list ($ano, $mes, $dia) = explode('-', $row->dataDeNascimento);
                echo "<h4>$row->user - $row->password - $row->sexo <br> Data de Nascimento: $dia / $mes / $ano </h4>";
                echo "<img src='imagens/$row->foto' width='20%'/> $row->descricao <br><br>";
                echo "Entre em contato comigo: $row->branch <br><br>";
            }
        }
    }
    
    
    */
}
catch(PDOException $e){
    echo "Conexão falhou: " . $e->getMessage();
}
?>




