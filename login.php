<?php
require_once 'classes/Conexao.php';
if (isset($_GET['sari'])) {
   session_destroy();
}
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
        <p class="form__paragraph">Ainda Não Tens Conta? <a href="registar.php" class="form__link">click aqui</a></p>
        <?php 
        if (isset($_POST['buton'])) {
            $email=$_POST['username'];
            $pass=$_POST['pass'];
            $values=[$email,$pass];
            $sq="SELECT * FROM users WHERE email=?";
            $query=$pdo->prepare($sq);
            $query->execute([$email]);
            $total=$query->rowCount();
            if ($total >0) {
                # Logando
               $dados=$query->fetchAll(PDO::FETCH_ASSOC);
               if (password_verify($pass,$dados[0]['pass'])) {
                $_SESSION['usuarios']=$dados[0];
                header('Location:home.php');
               } else {
                echo 'Palavra passe errada';
               }
               
            }
            else {
                echo '<p style="color:#f00;padding:3px;">Usúario não encontrado !</p>';
            }
        }
        ?>
        <div class="form__container">
            
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