<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-language" content="pt-br">
    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>
                    Entrar
                    <img class="card-header-right float-right" style="display: block;width: 50px;" src="imgs/perfil.png"><br>
                    <?php
                        include("db.php");

                        if (isset($_POST['entrar'])) {
                            $email = $_POST['email'];
                            $senha = $_POST['pass'];
                            $query = "SELECT * FROM users WHERE email = '$email' AND password = '$senha'";
                            $verifica = mysqli_query($connect, $query);
                            if (mysqli_num_rows($verifica) <= 0) {
                                echo "<h3>Senha ou email incorretos! tente novamente</h3>";
                            }else{
                                setcookie("login", $email);
                                header("location: ./");
                            }
                        }
                    ?>
                </h3>
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" required="" class="form-control" name="email" placeholder="Email:">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" required="" class="form-control" name="pass" placeholder="Senha:">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login" name="entrar" class="btn float-right login_btn">
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center links">
                    Ainda não tem uma conta?<a href="registrar.php">Registre-se</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
