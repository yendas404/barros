<?php
require_once 'classes/Conexao.php';
$conn=new Conexao();
$pdo=$conn->conn();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <div class="circle"></div>
    <form class="form" method="POST">
        <h2 class="form__title">Iniciar Sessão</h2>
        <p class="form__paragraph">Já Tens Conta? <a href="login.php" class="form__link">click aqui</a></p>
        <?php 
        if (isset($_POST['buton'])) {
            $email=$_POST['username'];
            $nome=$_POST['name'];
            $pass=$_POST['pass'];
            $pass=password_hash($pass,PASSWORD_DEFAULT);
            $sq="SELECT name,pass FROM users WHERE email=?";
            $query=$pdo->prepare($sq);
            $query->execute([$email]);
            $total=$query->rowCount();
            if ($total < 1) {
                $values=[$nome,$email,$pass];
               $sql="INSERT INTO users(name, email, pass) VALUES (?,?,?)";
               $q=$pdo->prepare($sql);
               $q->execute($values);
               header("Location:login.php");
            }
            else {
                echo '<p style="color:#f00;padding:3px;">Usúario já esta cadastrado !</p>';
            }
        
        }
        ?>
        <div class="form__container">
        <div class="form__group">
                <input type="text"  name="name" id="user" class="form__input" placeholder=" ">
                <label for="user" class="form__label">Nome :</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="email"  name="username" id="user" class="form__input" placeholder=" ">
                <label for="user" class="form__label">Email :</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="password"  name="pass" id="password" class="form__input" placeholder=" ">
                <label for="password" class="form__label">Palavra-Passe:</label>
                <span class="form__line"></span>
            </div>
            <input type="submit" name="buton" class="form__submit" value="Entrar">
        </div>
    </form>
    <div class="Creador"><a href="https://instagram.com/barross404"><i class="fa-brands fa-codepen"></i> @cover</a>
    </div>
</body>

</html>