<?php 
require_once 'classes/Conexao.php';
if(!isset($_SESSION['usuarios'])){
header("Location:login.php");
}
if (!isset($_GET['t'])) {
    header("Location:home.php");
}
$titlo=[
    'HTML',
    'CSS',
    'JAVASCRIPT',
    'PHP',
    'PYTHON'
];

$dados=$_SESSION['usuarios'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/home.css">
</head>

<body>
    <div class="px-3 py-1 " style="background: #3866f2;;">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>

                <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">

                    <li>
                        <a href="login.php?sari=ok" class="nav-link text-white">
                            <svg class=" mb-1" width="24" height="24">
                                <use xlink:href="#people-circle"></use>
                            </svg>
                            <span class="perfil  d-block">
                                <?=$dados['name']?>
                            </span>
                        </a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </div>
    <main>
        <div class="container">
            <div class="row mt-5">
                <p class="h2 text-center"><?=$titlo[$_GET['t']]?></p>
                <div class="col-md-4"></div>
                <div class="col-md-4 text-center">
                    <div class="panel my-2 bg-white  shadow px-3 py-5" style="border-radius: 6px; height: 280px; display: flex; flex-direction: column;justify-content: center;align-items: center;">
                        <p class="text-primary h4">Acesso Restrito</p>
                        <span>Para visitar todos codigo em <?=$titlo[$_GET['t']]?> tens que ligar ao Admin para efectuar o pagamento</span><br>
                        <a href="tel:244929995600" class="btn btn-outline-primary form-control">Ligar: 929995660</a>
                        <br>
                        <a href="home.php">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>