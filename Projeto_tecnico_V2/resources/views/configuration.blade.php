<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{asset('logo.png')}}">
    <style>
        .form-email{
            margin-right: 20rem!important;
            margin-left:20rem!important;
            margin-top:1rem!important;
        }


        .form-password{
            margin-right: 20rem!important;
            margin-left:20rem!important;
            margin-top:2rem!important;
        }
        .button-delete{
            margin-top:2rem!important;
        }
    </style>

    <title>Configurações para {{$user->email}}</title>
</head>
<body>
    <a href="{{route('user')}}" class = "btn btn-primary mt-2">Voltar</a>
    <div class="container px-4">
        <!-- <div class="row gx-5"> -->
            <div class = "row gx-5 form-email">
                <strong>Altere seu e-mail</strong>
                <div class = "p-3 border bg-light">
                    <form action="{{route('user.alter.email')}}" method = "POST">
                        @csrf
                        <p>Faça alterações no seu e-mail:</p>
                        <input type="email" class = "form-control mb-3" name= "email" value = "{{$user->email}}" required/>
                        <input class="btn btn-primary mb-3" type="submit" value="Alterar">
                    </form>
                </div>
            </div>
            <div class = "row gx-5 form-password">
            <strong>Altere sua senha</strong>
                <div class = "p-3 border bg-light">
                    <form action="{{route('user.alter.password')}}" method = "POST">
                        @csrf
                        <p>Informe a nova senha:</p>
                        <input type="password" class = "form-control mb-3" name="password" required/>
                        <p>Repita a senha:</p>
                        <input type="password" class = "form-control mb-3" name="confirm_password" required/>
                        <input class="btn btn-primary mb-3" type="submit" value="Alterar">
                    </form>
                    @if($erro == "Senha deve conter 8 ou mais digitos" || $erro == "Senhas não batem")
                        <p class = "text-danger">{{$erro}}</p>
                    @else
                        <p class = "text-success">{{$erro}}</p>
                    @endif
                </div>
            </div>
        <!-- </div> -->
    </div>
    <div class= "button-delete">
        <form action="{{route('user.destroy')}}" method = "POST">
        @csrf
            <center><button type="submit" class="btn btn-danger" >Excluir sua conta</button></center>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>