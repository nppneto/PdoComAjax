<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>

            h1 {
                text-align: center;
                margin-bottom: 50px;
            }

            .btn {
                width: 100px;
                height: 100px;
            }

            .botaoListar  {
                text-align: center;
                /* width: 100px;
                height: 100px; */
                /* background-color: blue; */
                /* color: white; */
                margin-bottom: 10px;
            }

            .botaoCadastrar {
                text-align: center;
            }

            .texto {
                color: white;
            }

    </style>
</head>
<body>

    <h1>Página Inicial</h1>

    <div class="botaoListar">

        <button class="btn btn-primary"><a class="texto" href="listar.php">Listar</a></button>

    </div>

    <div class="botaoCadastrar">

        <button class="btn btn-primary"><a class="texto" href="cadastrar.html">Cadastrar</a></button>

    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>