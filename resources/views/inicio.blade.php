<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conecta Assaí</title>
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/scripts/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/scripts/owlcarousel/assets/owl.theme.default.min.css') }}">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
</head>
<body>
    <header>
        <div class="topo"></div>
        <nav class="text-center shadow">
            <img src="{{ asset('assets/img/logo_conecta.png') }}" alt="Conecta Assaí">
        </nav>
        <div class="bg-header"></div>
        <div class="line no-print"></div>
    </header>

    <main>
        <section class="session-without-bg">
            <div class="container">
                <!--<p class="destaque-titulo">Destaques</p>-->
                <div class="row text-center">
                    <div class="col-sm-3 mb-3 mb-sm-0 mx-auto">
                        <div class="card w-100">
                            <img src="{{ asset('assets/img/programa-estagio.jpg') }}" class="card-img-top" alt="Programa de Estágio">
                            <div class="card-body">
                            <h5 class="card-title">Programas de Estágio 2025</h5>
                            <p class="card-text">Fortaleça sua carreira desde agora participando de programas de estágio.</p>
                            {{-- <a href="{{ route('estagios.formulario') }}" class="btn btn-danger">Encerrado</a> --}}
                            <a href="{{ route('estagios') }}" class="btn btn-success">Ver mais</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 mb-3 mb-sm-0 mx-auto">
                        <div class="card w-100">
                            <img src="{{ asset('assets/img/programa-estagio.jpg') }}" class="card-img-top" alt="Programa de Estágio">
                            <div class="card-body">
                            <h5 class="card-title">Cursos 2025</h5>
                            <p class="card-text">Descubra novas possibilidades por meio de cursos que unem conteúdo de qualidade e experiências significativas.a</p>
                            {{-- <a href="{{ route('estagios.formulario') }}" class="btn btn-danger">Encerrado</a> --}}
                            <a href="#" class="btn btn-success">Ver Mais</a>
                            </div>
                        </div>
                    </div>

                    <!--<div class="col-sm-3 mx-auto">
                        <div class="card w-100">
                            <img src="{{ asset('assets/img/programa-estagio.jpg') }}" class="card-img-top" alt="Programa de Estágio">
                            <div class="card-body">
                            <h5 class="card-title">Programa de Estágio 2025 - Ensino Médio</h5>
                            <p class="card-text">Inscrição no Processo Seletivo para Estágios na Administração Municipal - <a href="/arquivos/Edital_Processo_Seletivo.pdf" target="_blank">Edital nº 001/2025</a></p>
                            {{-- <a href="{{ route('estagios.formularioEM') }}" class="btn btn-danger">Encerrado</a> --}}
                            <a href="#" class="btn btn-danger">Encerrado</a>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
        </section>

    </main>

    <footer>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/scripts/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/scripts/owlcarousel/owl.carousel.min.js') }}"></script>

    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            })
        });
    </script>
</body>
</html>
