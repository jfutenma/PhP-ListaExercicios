<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Atividade - PhP</title>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-light" style="background-color: #14213d !important;">
        <div class="container-fluid">
            <a class="navbar-brand ms-5" href="#">
                <img src="https://cdn-icons.flaticon.com/png/512/2721/premium/2721652.png?token=exp=1651624389~hmac=adc68398961c61175ef61217cc535c28"
                    alt="" width="30" height="24" class="d-inline-block align-text-top">
            </a>
            <a class="navbar-brand" href="#">Atividades</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-row-reverse me-5" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Início</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Atividades
                        </a>
                        <ul class="dropdown-menu "  style="background-color: #14213d !important;" aria-labelledby="navbarDropdown">
                            <li ><a class="dropdown-item nav-fonte" href="adicao.php">Adição</a></li>
                            <li><a class="dropdown-item nav-fonte" href="divs.php">Divisão</a></li>
                            <li><a class="dropdown-item nav-fonte" href="perm.php">Permissão</a></li>
                            <li><a class="dropdown-item nav-fonte" href="desc.php">Decrescente</a></li>
                            <li><a class="dropdown-item nav-fonte" href="triang.php">Triângulos</a></li>
                            <li><a class="dropdown-item nav-fonte" href="mes.php">Mês</a></li>
                            <li><a class="dropdown-item nav-fonte" href="bib.php">Biblioteca</a></li>
                            <li><hr class="dropdown-divider" style="background-color: white;"</li>
                          <li><a class="dropdown-item nav-fonte" href="index.php">Início</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="corpo">
        <div class="bolinhas">
            <div class="b" id="b1"></div>
            <div class="b" id="b2"></div>
            <div class="b" id="b3"></div>
        </div>
        <h3 class="txt mt-2 ms-3"><b> Atividades</b></h3><br>
        <a href="adicao.php">
            <h5 class="txt ms-4"> <img class="topic"
                    src="https://cdn-icons.flaticon.com/png/512/4505/premium/4505754.png?token=exp=1651626941~hmac=fbd80986f8aad151fc2b5824994decd4"
                    alt=""> - Adição</h5>
        </a>
        <a href="divs.php">
            <h5 class="txt ms-4"> <img class="topic" src="https://cdn-icons-png.flaticon.com/512/7378/7378385.png"
                    alt=""> - Divisão</h5>
        </a>
        <a href="perm.php">
            <h5 class="txt ms-4"> <img class="topic"
                    src="https://cdn-icons.flaticon.com/png/512/2976/premium/2976592.png?token=exp=1651628578~hmac=61557a066fce68d3e7305ebda1975285"
                    alt=""> - Permissão</h5>
        </a>
        <a href="desc.php">
            <h5 class="txt ms-4"> <img class="topic" src="https://cdn-icons-png.flaticon.com/512/1208/1208211.png"
                    alt=""> - Decrescente</h5>
        </a>
        <a href="triang.php">
            <h5 class="txt ms-4"> <img class="topic" src="https://cdn-icons-png.flaticon.com/512/7331/7331146.png"
                    alt=""> - Triângulos</h5>
        </a>
        <a href="bib.php">
            <h5 class="txt ms-4"> <img class="topic"
                    src="https://cdn-icons.flaticon.com/png/512/5832/premium/5832416.png?token=exp=1651628755~hmac=8c75f116f3b612201af652085ea5e4ec"
                    alt=""> - Biblioteca</h5>
        </a><br>

        <p class="txt ms-3">-Feito por Juliana Futenma :) </p>
    </div>



</body>

</html>