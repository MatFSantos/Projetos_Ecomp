<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ECOMP Jr - Bem-vindo</title>
        <link rel="shortcut icon" href="{{asset('logo.png')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            .menu{
                /* margin-top:5rem!important; */
                margin-left:74rem!important;
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    </head>
    <body>
        <div class = "container">
            <center>
            <div class = "row">
                <p class = "lead display-4">Página Inicial</p>
            </div>
            </center>
            @if($verificator == null)
                <div class=" col">
                    <a class = "btn btn-primary mb-3" href="{{route('register.user')}}" style = "">Registrar</a>
                    <a class = "btn btn-primary mb-3" href="{{route('login')}}">Entrar</a>
                </div>
            @else
                <p><strong>Usuário Logado:</strong> {{$verificator->user->email}}</p>
                <div class="col">
                    <a class = "btn btn-primary mb-3" href="{{route('user')}}" style = "">Página do usuário</a>
                </div>
            @endif
        </div>
        <center>
            <figure class="figure">
                <img src="{{asset('logo_ecomp.png')}}" width="30%" class="figure-img img-fluid rounded" alt="...">
            </figure>
            <p class = "lead display-6"> Ecomp Jr.</p>
            <figcaption class="blockquote-footer">
                Um pouco sobre a <cite title="Source Title">Empresa Júnior da UEFS...</cite>
            </figcaption>
        </center>
        <div class = "container">
            <center><p class = "display-4">Diretrizes estratégicas</p></center>
        </div>
        <div class = "container-fluid">
            <div class = "row ">
                <div class = "col border border-5 border-primary rounded">
                    <div class = "row">
                        <center><p class = "blockquote"><strong><i>Visão</i></strong></p></center>
                    </div>
                    <div class = "row">
                        <p class = "lead">
                        Ser uma empresa que realiza projetos de impacto, mais conectada ao 
                        movimento empresa júnior e com grande reconhecimento dentro e fora da universidade.
                        </p>
                    </div>
                </div>
                <div class = "col border border-5 border-primary rounded">
                    <div class = "row">
                        <center><p class = "blockquote"><strong><i>Missão</i></strong></p></center>
                    </div>
                    <div class = "row">
                        <p class = "lead">
                        Através da vicência empresarial e trabalho em equipe,
                         formar profissionais inovadores, comprometidos e capazes de vencer desafios futuros.
                        </p>
                    </div>
                </div>
                <div class = "col border border-5 border-primary rounded">
                    <div class = "row">
                        <center><p class = "blockquote"><strong><i>Valores</i></strong></p></center>
                    </div>
                    <div class = "row ">
                        <p class = "lead">Os valores de uma empresa guiam a conduta da mesma, portanto a Ecomp Jr. baseia-se nos
                         seguintes valores: Protagonismo, Cooperatividade, Assiduidade, Resiliência, Constância em resultados,
                         Evolução com os erros, Conexão com o Movimento, Foco na Qualidade, Ética e Empatia.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class = "container">
            <center><p class = "display-4">Serviços prestados</p></center>
        </div>
        <div class = "container-fluid">
            <div class = "row ">
                <div class = "col border border-5 border-primary rounded">
                    <div class = "row">
                        <center><p class = "blockquote"><strong><i>Sites</i></strong></p></center>
                    </div>
                    <div class = "row">
                        <p class = "lead">
                        Desenvolvimento de sites de forma criativa, funcional e responsiva,
                        oferecendo a melhor solução para você ou sua empresa
                        </p>
                    </div>
                </div>
                <div class = "col border border-5 border-primary rounded">
                    <div class = "row">
                        <center><p class = "blockquote"><strong><i>Sistemas - Locais</i></strong></p></center>
                    </div>
                    <div class = "row">
                        <p class = "lead">
                        Impulsione o seu desempenho profissional reduzindo seus gastos. Possibilitamos a você os melhores Sistemas
                         Locais que permitem automatizar com facilidade suas tarefas ou serviços.
                        </p>
                    </div>
                </div>
                <div class = "col border border-5 border-primary rounded">
                    <div class = "row">
                        <center><p class = "blockquote"><strong><i>Aplicativos Mobile</i></strong></p></center>
                    </div>
                    <div class = "row ">
                        <p class = "lead">
                        Já pensou em ter a sua empresa, serviços e ideias na palma de sua mão?
                         Nós possibilitamos isso desenvolvendo soluções mobile sob medida para você.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class = "container-fluid">
            <div class = "row ">
                <div class = "col border border-5 border-primary rounded">
                    <div class = "row">
                        <center><p class = "blockquote"><strong><i>Sistemas-Web</i></strong></p></center>
                    </div>
                    <div class = "row">
                        <p class = "lead">
                        Reduza seus gastos impulsionando o seu desempenho profissional. Possibilitamos a você os melhores
                            Sistemas Web que permitem automatizar com facilidade suas tarefas ou serviços.
                        </p>
                    </div>
                </div>
                <div class = "col border border-5 border-primary rounded">
                    <div class = "row">
                        <center><p class = "blockquote"><strong><i>e-Commerce</i></strong></p></center>
                    </div>
                    <div class = "row">
                        <p class = "lead">
                        Tenha sua Loja Virtual e faça seus produtos atingirem uma clientela ainda maior.
                        </p>
                    </div>
                </div>
                <div class = "col">

                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    </body>
</html>
