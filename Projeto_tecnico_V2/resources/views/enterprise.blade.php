<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar {{$enterprise->name}}</title>
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
</head>
<body>
    <a href="{{route('user')}}" class = "btn btn-primary mt-2">Voltar</a>
    <div class="container px-4">
            <div class = "row gx-5 form-email">
                <strong>Nome da Empresa</strong>
                <div class = "p-3 border bg-light">
                    <form action="{{route('enterprise.alter.name')}}" method = "POST">
                        @csrf
                        <p>Altere o nome da empresa:</p>
                        <input type="text" class = "form-control mb-3" name= "name" value = "{{$enterprise->name}}" required/>
                        <button class = "btn btn-primary mb-3" type = "submit" value = "{{$enterprise->id}}" name = "enterprise_id">Alterar</button>
                    </form>
                </div>
            </div>
            <div class = "row gx-5 form-password">
            <strong>Sua federação</strong>
                <div class = "p-3 border bg-light">
                    <form action="{{route('enterprise.alter.federation')}}" method = "POST">
                        @csrf
                        <p>Altere sua federação:</p>
                        <select class="form-select mb-3" aria-label="Default select example" name = "federation">
                            @foreach($federations as $federation)
                                <option value="{{$federation->id}}"
                                @if($federation->id ==$enterprise->federation_id) selected @endif>
                                    {{$federation->name}}
                                </option>
                            @endforeach
                         </select>
                        <button class = "btn btn-primary mb-3" type = "submit" name = "enterprise_id" value = "{{$enterprise->id}}">Alterar</button>
                        
                    </form>
                </div>
            </div>
        <!-- </div> -->
    </div>
    <div class= "button-delete">
        <form action="{{route('enterprise.delete')}}" method = "POST">
        @csrf
            <center><button type="submit" class="btn btn-danger" name = "enterprise_id" value = "{{$enterprise->id}}" >Excluir empresa</button></center>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>