

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="css/registrar.css">
</head>
<body>
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>Cadastrar<img class="card-header-right float-right" style="display: block;width: 50px;" src="imgs/perfil.png"><br>
                    <?php
                        include("db.php");

                        if (isset($_POST['cadastrar'])) {
                            $nome = $_POST['nome'];
                            $apelido = $_POST['apelido'];
                            $email = $_POST['email'];
                            $senha = $_POST['pass'];
                            $consenha = $_POST['Conpass'];

                            if($senha != $consenha){
                                echo("As senhas não conhecidem");
                            }else{
                                $query = "INSERT INTO users (nome, usuario, email, password, data) VALUES ('$nome', '$apelido', '$email', '$consenha', NOW())";
                                $insere = mysqli_query($connect, $query);
                                if(mysqli_insert_id($connect)){
                                    echo("Usuario cadastrado com sucesso");
                                }else{
                                    echo("Usuario nao cadastrado");
                                }
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
                        <input type="text" required="" class="form-control" name="nome" placeholder="Nome Completo:">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
                        </div>
                        <input type="text" required="" class="form-control" name="apelido" placeholder="Apelido:">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="email" required="" class="form-control" name="email" placeholder="Email:">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" required="" class="form-control" name="pass" placeholder="Senha:">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" required="" class="form-control" name="Conpass" placeholder="Confirmar Senha:">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Registrar" name="cadastrar" class="btn float-right login_btn">
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center links">
                    Ja tem uma conta?<a href="login.php">Conecte-se</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
