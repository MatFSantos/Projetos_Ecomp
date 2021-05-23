<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Empresa</title>
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
 <a href="{{route('user')}}" class = "btn btn-primary mt-2">Voltar</a>
    <div class = "form-register">
        <center>
            <figure class="figure">
                <img src="{{asset('logo.png')}}" width="30%" class="figure-img img-fluid rounded" alt="...">
            </figure>
            <p>Cadastre uma empresa Júnior:</p>
        </center>
        
        <form action="{{route('store.enterprise')}}" method = "POST">
        @csrf
            <h6>Nome</h6>
            <input type="text" class = "form-control" name = "name" placehouder = "Nome da empresa" required/>
            
            <h6>Federação</h6>
            <select class="form-select mb-3" aria-label="Default select example" name = "federation">
                <option value ="" selected ></option>
                @foreach($federations as $federation)
                    <option value="{{$federation->id}}" >{{$federation->name}}</option>
                @endforeach
            </select>
            <div>
                <input class="btn btn-primary" type="submit" value="REGISTRAR">
            </div>
        </form>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>