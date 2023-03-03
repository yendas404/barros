<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cover</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        /* Custom default button */



        body {
            background-image: url(assets/img/anon-hack.webp);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

        }

        .cover-container {
            max-width: 42em;
        }

        .nav-masthead .nav-link {
            color: rgba(255, 255, 255, .5);
            border-bottom: .25rem solid transparent;
        }

        .nav-masthead .nav-link:hover,
        .nav-masthead .nav-link:focus {
            border-bottom-color: rgba(255, 255, 255, .25);
        }

        .nav-masthead .nav-link+.nav-link {
            margin-left: 1rem;
        }

        .nav-masthead .active {
            color: #fff;
            border-bottom-color: #fff;
        }

        .titulo-principal:after {
            content: '|';
            margin-left: 5px;
            opacity: 1;
            animation: pisca .7s infinite;
        }

        /* Animação aplicada ao content referente a classe *.titulo-principal* resultando num efeito de cursor piscando. */

        @keyframes pisca {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }
        }
        .fundo{
            background-color: rgba(0, 0, 0, 0.479);
            width: 100vw;

        }
    </style>
</head>

<body class="d-flex h-100 text-center ">
    <div class="fundo">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <header class="mb-auto ">
                <div>
                    <h3 class="float-md-start mb-0 text-white">Cover</h3>
                    <nav class="nav nav-masthead justify-content-center float-md-end">
                        <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="#">Home</a>
                        <a class="nav-link fw-bold py-1 px-0" href="login.php">Entrar</a>
                        <a class="nav-link fw-bold py-1 px-0" href="registar.php">Registo</a>
                    </nav>
                </div>
            </header>

            <main class="px-3">
                <h1 class="text-white">Cover.</h1>
                <p class="titulo-principal h2 mb-2  text-white">Seja Bem-vindo ao Cover, aqui encontrarás códigos prontos escrito em
                    CSS,PHP,Java,Python, C, C++,C#, javascript !</p>
                <p class="lead">
                    <a href="registar.php" class="btn btn-lg btn-danger fw-bold my-2">Registar-se</a>
                </p>
            </main>

            <footer class="mt-auto text-white-50">
                <p>2023 <a href="https://github.com/emilianobarrros" class="text-white">António Barros</a>, by <a
                        href="https://instagram.com/barros404" class="text-white">@barross404</a>.</p>
            </footer>
        </div>
    </div>
</body>
<script src="assets/js/main.js"></script>

</html>