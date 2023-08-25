<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user = $_POST['user'];
		$password = $_POST['password'];

		if(!empty($user) && !empty($password) && !is_numeric($user))
		{

			//save to database
			$user_id = random_num(20);
			$query = "INSERT INTO users (user_id,user,password) values ('$user_id','$user','$password')";

			mysql_query($conexao, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" sizes="160x160" href="https://static.wikia.nocookie.net/library-of-ruina/images/8/85/Limbus_Company_site_logo.png/revision/latest?cb=20230803192732">

    <link rel="stylesheet" href="styles.css">

    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body style="background-image: url(https://limbuscompany.com/wp-content/uploads/2021/12/eng.png);">
    <div class="container" style="box-shadow: rgba(225, 90, 90, 0.9) 0px 5px 10px 0px;">
        <div class="row">
            <img src="https://i0.wp.com/limbuscompany.com/wp-content/uploads/2021/10/limbus_logo_text_02-1.png?resize=2000%2C405&ssl=1">
            <div class="col-md-4 offset-md-4">

                <!--Card-->
                <div class="card bg-dark text-white">
                    <div class="card-body">

                        <!--Formulario-->

                        <form action="login.php" method="post">
                            <!--Usuario-->
                            <div class="mb-3">
                                <label>User Name</label>
        
                                <input  
                                    type="text" 
                                        
                                    name="user"
                                    placeholder="username"
                                        
                                    class="form-control"
                                >
                            </div>
                            <div class="mb-3">
                                <label>Password</label>
        
                                <input  
                                    type="password" 
                                        
                                    name="password"
                                    placeholder="password"
                                        
                                    class="form-control"
                                >
                            </div>
                            <!--Confirmar Senha-->
                            </div>
                            <!--Registrar-->
                            <div class="mb-3">
                                <button
                                    type="submit"
                                    value="Signup"
                                    class="btn btn-danger">Register
                                </button>
                            </div>
                            <div class="mb-3">
                                <button
                                    type="submit"
                                    value="Login"
                                    class="btn btn-danger">Login
                                </button>
                            </div>
                            <!--<a href="login.php">Click to Login</a>-->
                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>
</body>
</html>
<!--<a href="Login.html"><h1>Executive Manager</h1></a>
                        <a href="Login.html"><h1>Bus Staff</h1></a>
                        <a href="Login.html"><h1>Limbus Company Clearance Department</h1></a>
                        <a href="Login.html"><h1>Limbus Company Distortion Department</h1></a>
                        <a href="Login.html"><h1>Sinners</h1></a>
                    