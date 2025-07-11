@extends('estagios.master')

@section('css')
    <!-- Páginas CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/govassai-template.css?v=1">

@endsection

@section('header')

@endsection

@section('content')
<div class="col-xl-10 mx-auto">
    <!-- Account details card-->
    <div class="card mt-4">
        <div class="card-header painel-card-header"><strong>Programa Municipal de Estágio</strong></div>
        <div class="card-body">

            <div class="shadow-sm rounded my-4 p-4">
                <div class="row">
                    <div class="col-xl-4">
                        <img src="/assets/img/logo_brasao.png" alt="" height="120">
                    </div>

                    <div class="col-xl-8">
                        <h1 class="display-6">Parabéns, {{$candidato->nome}}!</h1>


                            <p class="m-1 fw-bold">Seu Cadastro foi realizado com sucesso.</p>
                            <p class="m-1">Imprima seu Protocolo e aguarde um contato da Prefeitura para proceder com os próximos passos.</p>
                            <p class="m-1">
                                Para maiores informações, procure a Prefeitura ou encaminhe um e-mail para
                                <a href="mailto: secti@assai.pr.gov.br">secti@assai.pr.gov.br</a>
                            </p>

                    </div>
                </div>
            </div>

            <div class="shadow-sm rounded my-4 p-4">
                <div class="row">
                    <div class="col-xl-4">
                        <h6><strong>SEU NÚMERO DE CADASTRO É:</strong></h6>
                        <h1 class="display-6">{{ str_pad($candidato->id, 5, '0', STR_PAD_LEFT) }}</h1>
                        <p class="m-1 fw-bold">&nbsp;</p>
                    </div>
                    <div class="col-xl-8">
                        <p class="m-1 mt-4">Data do Cadastro: <strong>{{date('d/m/Y H:i:s', strtotime($candidato->created_at)) }}</strong></p>
                        <p class="m-1">Tipo da Vaga: <strong>ENSINO SUPERIOR</strong></p>

                        <div style="margin-top: 20px;">
                            <table>
                                <tr>
                                    <td>Nome do Cidadão:&nbsp;</td>
                                    <td><strong>{{$candidato->nome}}</strong></td>
                                </tr>
                                <tr>
                                    <td>CPF:&nbsp;</td>
                                    <td><strong>{{$candidato->cpf}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Vaga Desejada:&nbsp;</td>
                                    <td><strong>{{ $candidato->vaga_desejada }}</strong></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-warning me-md-2" id="btSave" type="button" onclick="window.open('{{route('estagios.pdf.protocoloNovoEdital')}}','_blank'); return false;">Imprimir Protocolo</button>
                    <button class="btn btn-primary me-md-2" id="btSave" type="button" onclick="location.href='{{route('estagios.finishNovoEdital')}}';">Concluir</button>
                </div>
            </div>

        </div>
    </div>

</div>


@endsection

@section('scripts')
    <script src="/assets/scripts/jquery/jquery.js"></script>
    <script src="/assets/scripts/maskedinput/jquery-maskedinput.js"></script>
    <script data-search-pseudo-elements="" defer="" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" crossorigin="anonymous"></script>
    <script data-search-pseudo-elements="" defer="" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="/assets/portal/js/scripts.js"></script>
    <script src="/assets/portal/js/contrast.class.js"></script>

@endsection
