<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar usuário</title>
    <link rel="shortcut icon" href="{{asset('logo.png')}}">
    <style>
        .form-register{
            margin-right: 25rem!important;
            margin-left:25rem!important;
            margin-top:10rem!important;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
    <p style = "margin-left: 72rem!important;">Já é cadastrado? <a href="{{route('login')}}" class = "btn btn-primary">clique aqui</a></p>
    <div class = "form-register">
        <center>
            <figure class="figure">
                <img src="{{asset('logo.png')}}" width="30%" class="figure-img img-fluid rounded" alt="...">
            </figure>
        </center>
        <form action="{{route('store.user')}}" method = "POST">
        @csrf
            <div>
                <p style="color: red;">{{$erro}}</p>
            </div>
            <h6>Email</h6>
            <input type="email" class = "form-control mb-2" name= "email" placehouder = "Informe seu email" required/>

            <h6>Senha</h6>
            <input type="password" class = "form-control mb-2" name = "password" required/>

            <h6>Confirme a Senha</h6>
            <input type="password" class = "form-control mb-2" name = "confirm_password" required/>
            
            <div>
                <input class="btn btn-primary" type="submit" value="REGISTRAR">
            </div>
        </form>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>