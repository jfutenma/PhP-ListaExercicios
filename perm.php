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
    <title>Permissão</title>
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
                        <ul class="dropdown-menu " style="background-color: #14213d !important;"
                            aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item nav-fonte" href="adicao.php">Adição</a></li>
                            <li><a class="dropdown-item nav-fonte" href="divs.php">Divisão</a></li>
                            <li><a class="dropdown-item nav-fonte nav-selec" href="perm.php">Permissão</a></li>
                            <li><a class="dropdown-item nav-fonte" href="desc.php">Decrescente</a></li>
                            <li><a class="dropdown-item nav-fonte" href="triang.php">Triângulos</a></li>
                            <li><a class="dropdown-item nav-fonte" href="mes.php">Mês</a></li>
                            <li><a class="dropdown-item nav-fonte" href="bib.php">Biblioteca</a></li>
                            <li>
                                <hr class="dropdown-divider" style="background-color: white" ;</li>
                            <li><a class="dropdown-item nav-fonte" href="index.php">Início</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="corpo corpo-altura">
        <div class="bolinhas">
            <div class="b" id="b1"></div>
            <div class="b" id="b2"></div>
            <div class="b" id="b3"></div>
        </div>
        <h3 class="txt mt-2 ms-3"><b>Permissão</b></h3><br>
        <form method="post">
            <span class="txt ms-3">Qual seu nome? </span>
            <input type="text" placeholder="Meu nome é ..." class="inputs maior" name="nome"><br><br>
            <span class="txt ms-3">Qual seu Gênero? </span>
            <select class="selec" name="gen" id="">
                <option value="n" >Selecione</option>
                <option value="f">Feminino</option>
                <option value="m">Masculino</option>
                <option value="o">Outro</option>
            </select><br><br>
            <span class="txt ms-3">Digite o ano atual</span>
            <input type="text" placeholder="0" class="inputs" name="anoA"><br><br>
            <span class="txt ms-3">Digite do seu nascimento</span>
            <input type="text" placeholder="0" class="inputs" name="anoN"><br>

            <center>
                <button class="btn btn-success mt-5">Verificar</button>
            </form>
            
            <?php
            if($_POST){
                $nome = $_POST['nome'];
                $gen = $_POST['gen'];
                $anoA = $_POST['anoA'];
                $anoN = $_POST['anoN'];
                $idade = $anoA - $anoN;
                
                switch ($gen){
                    case 'f':
                        if($idade<25){
                            echo "<p class='txt mt-4 mb-3'>$nome, ACEITA</p>";
                        }
                        else{
                            echo "<p class='txt mt-4 mb-3'>$nome, NÃO ACEITA</p>";
                        }
                    break;
                        
                    case 'm':
                        echo "<p class='txt mt-4 mb-3'>$nome, NÃO ACEITO</p>";     
                    break;
                            
                    case 'o':
                        echo "<p class='txt mt-4 mb-3'>$nome, NÃO ACEITO</p>";
                    break;

                    case 'n':
                        echo "<p class='txt mt-4 mb-3'>Selecione um gênero válido.</p>";
                    break;
                }
            }?>
            </center>
        </div>
</body>

</html>