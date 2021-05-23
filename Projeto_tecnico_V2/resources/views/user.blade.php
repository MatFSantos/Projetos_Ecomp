<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{asset('logo.png')}}">
    <style>
        .form-search{
            /* margin-left:2rem!important; */
            /* margin-right: 6rem!important; */
        }
        .disconect{
            margin-left: 68rem!important;
        }
    </style>
</head>
<body>
    <a href="/" class = "btn btn-primary mt-2">Página inicial</a>
    <ul class = "nav justify-content-end mb-3">
        <li class = "nav-item">
            <a class="nav-link active " aria-current="page" href="{{route('user.config')}}">Configuração</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="{{route('user.logout')}}">Desconectar</a>
        </li>
    </ul>
    <ul class = "nav nav-pills justify-content-center mb-3">
        <li class="nav-item ">
            <a class="nav-link active " aria-current="page" href="{{route('register.enterprise')}}">Cadastrar empresa junior</a>
        </li>
    </ul>
    <!-- <br></br> -->
    <div class="container px-4 mb-3">
        <div class="row gx-5">
            <div class="col">
                <strong>Pesquise por nome</strong>
                <div class="p-3 border bg-light">
                    <form action="{{route('searchByN.enterprise')}}">
                        <input type="text" class = "form-control mb-3" name= "enterprise" />
                        <input class="btn btn-primary mb-3" type="submit" value="Pesquisar">
                    </form>
                </div>
            </div>
            <div class="col">
                <strong>Pesquise por federação</strong>
                <div class="p-3 border bg-light">
                    <form action="{{route('searchByF.enterprise')}}">
                        <select class="form-select mb-3" aria-label="Default select example" name = "federation">
                            <option value ="0" selected >Selecione uma Federação</option>
                            @foreach($federations as $federation)
                                <option value="{{$federation->id}}" >{{$federation->name}}</option>
                            @endforeach
                         </select>
                        <input class="btn btn-primary mb-3" type="submit" value="Pesquisar">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class = "container px-4 mb-3">
        <div class="row gx-5">
            <center><h2><strong>Empresas Cadastradas</strong></h2></center>
        </div>
    </div>
    <table class="table form-search">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Federação</th>
                <th scope="col">Deletar</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($enterprises as $enterprise)
                    <tr>
                        <th scope="row">{{$enterprise->id}}</th>
                        <td>{{$enterprise->name}}</td>
                        <td>{{$enterprise->federation->name}}</td>
                        <form action="{{route('enterprise.delete')}}" method = "POST">
                        @csrf
                            <td><button class = "btn btn-danger"type = "submit" value = "{{$enterprise->id}}" name = "enterprise_id">Deletar</button></input></td>
                        </form>
                        <form action="{{route('enterprise.edit')}}">
                        @csrf
                            <td><button class = "btn btn-success" type = "submit" name = "enterprise_id" value = "{{$enterprise->id}}">Editar</button></td>
                        </form>
                    </tr>
            @endforeach
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>