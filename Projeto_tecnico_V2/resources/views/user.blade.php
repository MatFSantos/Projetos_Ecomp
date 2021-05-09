<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <style>
        .form-search{
            margin-left:10rem!important;
        }
        .disconect{
            margin-left: 68rem!important;
        }
    </style>
</head>
<body>
    <div class="container px-4">
        <div class="disconect">
            <a href="{{route('user.logout')}}">Desconectar</a>
        </div>
        <div>
            <a href="{{route('register.enterprise')}}">Cadastrar empresa junior</a>
        </div>
        
    </div>
    <div class="container px-4">
        <div class="row gx-5">
            <div class="col">
                <div class="p-3 border bg-light">
                    <form action="{{route('searchByN.enterprise')}}">
                        <input type="text" class = "form-control" name= "enterprise" />
                        <input class="btn btn-primary" type="submit" value="PESQUISAR">
                    </form>
                </div>
            </div>
            <div class="col">
                <div class="p-3 border bg-light">
                    <form action="{{route('searchByF.enterprise')}}">
                        <select class="form-select" aria-label="Default select example" name = "federation">
                            <option value ="0" selected >Selecione uma Federação</option>
                            @foreach($federations as $federation)
                                <option value="{{$federation->id}}" >{{$federation->name}}</option>
                            @endforeach
                         </select>
                        <input class="btn btn-primary" type="submit" value="PESQUISAR">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class = "container px-4">
        <div class="row gx-5">
                <p><strong>Empresas Cadastradas</strong></p>
        </div>
    </div>
    <table class="table form-search">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Federação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($enterprises as $enterprise)
                <tr>
                    <th scope="row">{{$enterprise->id}}</th>
                    <td>{{$enterprise->name}}</td>
                    <td>{{$enterprise->federation->name}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>