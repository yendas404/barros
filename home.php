<?php 
require_once 'classes/Conexao.php';
if(!isset($_SESSION['usuarios'])){
header("Location:login.php");
}

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
                                <?=$dados['me']?>
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
                <div class="col-md-4 text-center">
                    <div class="panel my-2 bg-white  shadow p-2" style="border-radius: 6px; height: 180px; display: flex; flex-direction: column;justify-content: center;align-items: center;">
                        <p class="text-primary h2">HTML</p>
                        <span>Encontre codigo feito em HTM</span><br>
                        <a href="list.php?t=0" class="btn btn-primary form-control">Ver</a>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="panel my-2 bg-white shadow p-2" style="border-radius: 6px; height: 180px; display: flex; flex-direction: column;justify-content: center;align-items: center;">
                        <p class="text-primary h2">Javascript</p>
                        <span>Encontre codigo feito em Javascript</span><br>
                        <a href="list.php?t=2" class="btn btn-primary form-control">Ver</a>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="panel my-2 bg-white shadow p-2" style="border-radius: 6px; height: 180px; display: flex; flex-direction: column;justify-content: center;align-items: center;">
                        <p class="text-primary h2">PHP</p>
                        <span>Encontre codigo feito em PHP</span><br>
                        <a href="list.php?t=3" class="btn btn-primary form-control">Ver</a>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="panel my-2 bg-white shadow p-2" style="border-radius: 6px; height: 180px; display: flex; flex-direction: column;justify-content: center;align-items: center;">
                        <p class="text-primary h2">CSS</p>
                        <span>Encontre codigo feito em CSS</span><br>
                        <a href="list.php?t=1" class="btn btn-primary form-control">Ver</a>
                    </div>
                </div>
                
            </div>
        </div>
    </main>
</body>

</html>