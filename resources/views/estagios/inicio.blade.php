<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Programa de Estágio</title>
    <link rel="icon" href="{{ asset('img/favicon.png') }}" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="{{ asset('css/site.css') }}" rel="stylesheet" />
</head>
<body>
    <form method="post" action="" id="form1">
    <div class="container">
        <div class="card card-container">
            <img src="{{ asset('img/cadastro.png') }}" class="img-fluid" />

            <p id="profile-name1" class="profile-name-card"></p>

            <img id="profile-img" class="profile-img-card" src="{{ asset('img/avatar_2x.png') }}" />

            <div class="form-signin ">
                <div class="form-inline">
                    <input name="txtCPF" type="text" maxlength="11" id="txtCPF" title="Digite somente números" class="form-control" placeholder="CPF" />
                </div>
                <div class="form-inline">
                    <input name="txtNascimento" type="text" maxlength="10" id="txtNascimento" title="dd/mm/aaaa" class="form-control" placeholder="Data de nascimento" />
                </div>

                <input type="submit" name="btnEnviar" value="Entrar" id="btnEnviar" class="btn btn-success btn-block mt-3" />

                <br />
            </div>

        </div>

        <div class="card card-container centraliza-horizontal badge-pill">
            <span id="lblAviso" style="font-size:Small;text-align: inherit">Ao clicar no botão "Entrar", o estudante aceita automaticamente e integralmente os termos e condições descritos no "Termo de Uso Cadastro de Estudante da PMC".</span>
            <br />
            <a id="HyperLink1" href="Termo_de_Uso_Aplicacao_Cadastro_de_Estudante.pdf" target="_blank" style="font-size:Small;">Clique aqui e conheça o termo de uso</a>
        </div>
        <br />

    </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
