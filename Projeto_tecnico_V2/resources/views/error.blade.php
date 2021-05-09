<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERROR</title>

    <style>
        .erro-mensage{
            color: red;
            font-size: 50px;
        }
        .div-erro{
            margin-right: 25rem!important;
            margin-left:25rem!important;
            margin-top:10rem!important;
        }
    </style>
</head>
<body>
    <div class = "div-erro">
        <h1 class = "erro-mensage">
            {{$erro}}
        </h1>
        <a href="">VOLTAR</a>
    </div>
</body>
</html>