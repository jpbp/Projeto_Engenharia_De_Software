<?php
 session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="author" content="Gabrielle">
    <link rel="icon" href="imagens/hogwarts.png">

    <!-- Responsivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/63cd9f4730.js"></script>
</head>

<body>
    <form action="../Controller/controller_login.php" method="POST">

        <div class="login container" id="layoutLogin">
            <img src="imagens/hogwarts.png" alt="hogwarts">
            
            
            <!-- Username -->
            <div class="col-md-11 mb-3">
                <label for="validationDefaultUsername">Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2"><i class="far fa-user"></i></span>
                    </div>
                    <input name="usuario" type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>

            <!-- Password -->
            <div class="col-md-11 mb-3">
                <label for="inputPassword6">Password</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-key"></i></span>
                    </div>
                    <input name="senha" type="password" id="inputPassword6" class="form-control" placeholder="Password" aria-describedby="passwordHelpInline" required>
                </div>
            </div>
            <div class="form-row">
                <div id="botao" class="col-sm-8">
                    <button type="submit" class="btn btn-success">Entrar</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>