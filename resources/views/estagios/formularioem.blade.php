@extends('estagios.master')

@section('css')
    <!-- Páginas CSS -->
    <link rel="stylesheet" href="{{ asset('scripts/bootstrap/dist/5.3.1/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="{{ asset('css/site.css') }}" rel="stylesheet" />

@endsection

@section('header')

@endsection

@section('content')
<div class="col-xl-10 mx-auto">
    <!-- Account details card-->
    <div class="card mt-4">
        <div class="card-header painel-card-header"><strong>Programa Municipal de Estágio - Ensino Médio</strong></div>
        <div class="card-body">
            <form action="{{route('estagios.createEM')}}" method="post" id="formPre">
            @csrf()
            <div class="shadow-sm rounded my-4 p-4">
                <div class="row">
                    <div class="col-xl-4">
                        <img src="{{ asset('img/logo_brasao.png') }}" alt="Brasão do Município de Assaí" height="140">
                    </div>

                    <div class="col-xl-8">
                        <h1 class="display-6">Vagas de Ensino Médio</h1>
                        <p class="m-1"><strong>Processo Seletivo - Edital nº 001/2025</strong> - <a href="/arquivos/Edital_Processo_Seletivo.pdf" target="_blank">Acesse o Documento Aqui</a></p>

                            <p class="m-1">1. Preencha todos os dados abaixo, obrigatoriamente os marcados com <strong>*</strong>;</p>
                            <p class="m-1">2. Assinale os Termos de Consentimento para habilitar o Botão Registrar;</p>
                            <p class="m-1">3. Clicar no Botão Registrar.</p>
                            <span
                                style="font-size: 10px; background-color: #008C32; color: white; padding: 3px; top: -3px; position: relative; margin-left: 0px;">
                                OBS: Caso tenha problema com o cadastro, faça contato com a Secretaria de Ciência, Tecnologia e Inovação através do Telefone: (43) 3262-8306
                            </span>
                            <span style="float: left; width: 100%;" class="small">
                                Atendimento via WhatsApp: <a href="https://wa.link/mjnxvb" target="_blank" style="text-decoration: none;">&nbsp;<img src="{{ asset('img/whatsapp.png') }}" alt="Contato por WhatsApp" height="24"></a>
                            </span>

                    </div>
                </div>
            </div>

            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif

            <div class="shadow-sm rounded my-4 p-4">
                <h6>DADOS PESSOAIS</h6>
                <div class="row mt-2">
                    <div class="col-xl-6">
                        <label class="small mb-1 fw-bold" for="txtSexo1">Informe o seu Sexo: *</label>
                    </div>
                    <div class="col-xl-6">
                        <label class="small mb-1 fw-bold" for="txtRaca1">Informe a sua Raça / Cor: *</label>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-xl-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="txtSexo" id="txtSexo1" value="F" style="border: solid 1px">
                            <label class="small form-check-label" for="txtSexo1">
                              Feminino
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="txtSexo" id="txtSexo2" value="M" style="border: solid 1px">
                            <label class="small form-check-label" for="txtSexo2">
                             Masculino
                            </label>
                        </div>
                    </div>
                    <div class="col-xl-6 ml-4">
                        @foreach ($tiporaca as $item)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="txtRaca" id="txtRaca{{ $item->id }}" value="{{ $item->id }}" style="border: solid 1px">
                            <label class="small form-check-label" for="txtRaca1">
                              {{ $item->nome }}
                            </label>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="mb-3 ">
                    <label class="small mb-1 fw-bold" for="txtCPF">Informe o número do seu CPF: *</label>
                    <input class="form-control" id="txtCPF" name="txtCPF" type="text" placeholder="Digite apenas os números" value="" />
                </div>

                <div class="mb-3">
                        <label class="small mb-1 fw-bold" for="txtNome">Informe o seu Nome Completo: *</label>
                        <input class="form-control uppercase" id="txtNome" name="txtNome" type="text" placeholder="Digite seu Nome Completo igual do RG" value="" />
                </div>

                <div class="mb-3">
                        <label class="small mb-1 fw-bold" for="txtNomeSocial">Informe o seu Nome Social</label>
                        <input class="form-control uppercase" id="txtNomeSocial" name="txtNomeSocial" type="text" placeholder="Digite seu Nome Social, caso tenha" value="" />
                </div>

                <div class="mb-3">
                        <label class="small mb-1 fw-bold" for="txtNascimento">Informe sua Data de Nascimento: *</label>
                        <input class="form-control" id="txtNascimento" name="txtNascimento" type="text" placeholder="Digite sua Data de Nascimento" value="" />
                </div>

                <div class="row mt-3">
                    <div class="col-xl-4">
                        <div class="mb-3">
                            <label class="small mb-1 fw-bold" for="txtNacionalidade">Informe o país que você nasceu (Nacionalidade): *</label>
                            <select class="form-select select-uf" name="txtNacionalidade" aria-label="Selecione...">
                                @foreach ($tiponacionalidade as $item)
                                    @if ($item->sigla === old('txtNacionalidade','BR'))
                                    <option value="{{ $item->id }}" selected>{{ $item->sigla.' - '.$item->nome_pt }}</option>
                                    @else
                                    <option value="{{ $item->id }}">{{ $item->sigla.' - '.$item->nome_pt }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="mb-3 ">
                            <label class="small mb-1 fw-bold" for="txtNaturalidade">Informe a cidade que você nasceu (Naturalidade): *</label>
                            <input class="form-control uppercase" id="txtNaturalidade" name="txtNaturalidade" type="text" placeholder="Digite o nome da cidade" value="" />
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="mb-3 ">
                            <label class="small mb-1 fw-bold" for="txtNaturalidadeUF">Informe a UF da Naturalidade: *</label>
                            <select class="form-select select-uf" name="txtNaturalidadeUF" aria-label="Selecione...">
                                <option value="">Selecione ...</option>
                                @foreach ($tipouf as $item)
                                    @if ($item->uf === old('txtNaturalidade',''))
                                    <option value="{{ $item->uf }}" selected>{{ $item->uf }}</option>
                                    @else
                                    <option value="{{ $item->uf }}">{{ $item->uf }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

            </div>

            <div class="shadow-sm rounded my-4 p-4">
                <h6>CONTATOS</h6>
                <div class="mb-3 ">
                    <label class="small mb-1 fw-bold" for="txtEmail">Informe o seu E-mail</label>
                    <input class="form-control" id="txtEmail" name="txtEmail" type="text" placeholder="Digite seu e-mail" value="" />
                </div>

                <div class="row mt-3">
                    <div class="col-xl-10">
                        <div class="mb-3 ">
                            <label class="small mb-1 fw-bold" for="txtCelular">Informe o seu Celular</label>
                            <input class="form-control" id="txtCelular" name="txtCelular" type="text" placeholder="Digite apenas os números" value="" />
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="form-check mt-4">
                            <input class="form-check-input" type="checkbox" value="S" id="txtCelularWA" name="txtCelularWA" style="border: solid 1px">
                            <label class="small form-check-label" for="txtCelularWA" >
                              Marque aqui se o número é WhatsApp?
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mb-3 ">
                    <label class="small mb-1 fw-bold" for="txtTelefone">Informe o seu Telefone Residencial</label>
                    <input class="form-control" id="txtTelefone" name="txtTelefone" type="text" placeholder="Digite apenas os números" value="" />
                </div>

                <div class="row mt-3">
                    <div class="col-xl-6">
                        <div class="mb-3 ">
                            <label class="small mb-1 fw-bold" for="txtTelRecado">Informe o um Telefone de Recado</label>
                            <input class="form-control" id="txtTelRecado" name="txtTelRecado" type="text" placeholder="Digite apenas os números" value="" />
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="mb-3 ">
                            <label class="small mb-1 fw-bold" for="txtNomeRecado">Falar com</label>
                            <input class="form-control uppercase" id="txtNomeRecado" name="txtNomeRecado" type="text" placeholder="Digite o nome da pessoa de recado" value="" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="shadow-sm rounded my-4 p-4">
                <h6>RESPONSÁVEL FAMILIAR</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="txtRF" id="txtRF1" value="P" checked style="border: solid 1px">
                    <label class="small form-check-label" for="txtRF1">
                      Pai
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="txtRF" id="txtRF2" value="M" style="border: solid 1px">
                    <label class="small form-check-label" for="txtRF2">
                     Mãe
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="txtRF" id="txtRF3" value="R" style="border: solid 1px">
                    <label class="small form-check-label" for="txtRF3">
                     Outro Responsável Legal
                    </label>
                </div>

                <div class="mb-3 ">
                    <label class="small mt-2 mb-1 fw-bold" for="txtRFNome">Nome do Responsável Familiar</label>
                    <input class="form-control uppercase" id="txtRFNome" name="txtRFNome" type="text" placeholder="Digite o Nome do RF" value="" />
                </div>

                <div class="mb-3 ">
                    <label class="small mt-2 mb-1 fw-bold" for="txtRFCPF">CPF do Responsável Familiar</label>
                    <input class="form-control" id="txtRFCPF" name="txtRFCPF" type="text" placeholder="Digite apenas os números" value="" />
                </div>
            </div>

            <div class="shadow-sm rounded my-4 p-4">
                <h6>DOCUMENTOS</h6>
                <div class="row">
                    <div class="col-xl-4">
                        <div class="mb-3 ">
                            <label class="small mt-2 mb-1 fw-bold" for="txtRG">Informe o número da sua Identidade (RG): *</label>
                            <input class="form-control numbers" id="txtRG" name="txtRG" type="text" placeholder="Digite apenas os números" value="" />
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="mb-3 ">
                            <label class="small mt-2 mb-1 fw-bold" for="txtRGOrgao">Informe o Órgão de Emissão (RG): *</label>
                            <input class="form-control uppercase" name="txtRGOrgao" id="txtRGOrgao" type="text" placeholder="Digite o nome do órgão" value="" />
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div>
                            <label class="small mt-2 mb-1 fw-bold" for="txtRGUF">Informe a UF de Emissão (RG): *</label>
                            <select class="form-select select-uf" name="txtRGUF" aria-label="Selecione...">
                                <option value="">Selecione ...</option>
                                @foreach ($tipouf as $item)
                                    @if ($item->uf === old('txtRGUF',''))
                                        <option value="{{ $item->uf }}" selected>{{ $item->uf }}</option>
                                    @else
                                        <option value="{{ $item->uf }}">{{ $item->uf }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="shadow-sm rounded my-4 p-4">
                <h6>PESSOA COM DEFICIÊNCIA</h6>
                <label class="small mt-2 mb-1 pe-2 fw-bold" for="txtPCD1">Tem alguma Deficiência? *</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="txtPCD" id="txtPCD1" value="S" style="border: solid 1px">
                    <label class="small form-check-label" for="txtPCD1">
                      Sim
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="txtPCD" id="txtPCD2" value="N" checked style="border: solid 1px">
                    <label class="small form-check-label" for="txtPCD2">
                     Não
                    </label>
                </div>

                <label class="small mb-1 pe-2 fw-bold" for="txtPCDQ1">Qual(is)?</label>
                @foreach ($tipopcd as $item)
                <div class="form-check form-check-inline form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" name="txtPCDQ[]" id="txtPCDQ{{$item->id }}" value="{{$item->id }}">
                    <label class="small form-check-label" for="txtPCDQ">{{ $item->nome }}</label>
                </div>
                @endforeach
            </div>

            <div class="shadow-sm rounded my-4 p-4">
                <h6>ENDEREÇO ATUAL</h6>
                <div class="mb-3 ">
                    <label class="small mt-2 mb-1 fw-bold" for="txtCEP">Informe o CEP da sua Residência: *</label>
                    <input class="form-control uppercase" id="txtCEP" name="txtCEP" type="text" placeholder="Digite o CEP do seu endereço" value="" />
                </div>

                <div>
                    <label class="small mt-2 mb-1 fw-bold" for="txtLogradouroTipo">Informe o Tipo de Logradouro da sua Residência: *</label>
                    <select class="form-select select-uf" name="txtLogradouroTipo" aria-label="Selecione...">
                    @foreach ($tipologradouro as $item)
                        @if ($item->nome === old('txtLogradouroTipo','RUA'))
                        <option value="{{ $item->id }}" selected>{{ $item->nome }}</option>
                        @else
                        <option value="{{ $item->id }}">{{ $item->nome }}</option>
                        @endif
                    @endforeach
                    </select>
                </div>

                <div class="mb-3 ">
                    <label class="small mt-2 mb-1 fw-bold" for="txtLogradouro">Informe o Nome do Logradouro (Nome da Rua, Avenida etc) da sua Residência: *</label>
                    <input class="form-control uppercase" id="txtLogradouro" name="txtLogradouro" type="text" placeholder="Digite seu endereço" value="" />
                </div>

                <div class="row">
                    <div class="col-xl-2">
                        <div class="mb-3 ">
                            <label class="small mt-2 mb-1 fw-bold" for="txtLogradouroNum">Informe o Número: *</label>
                            <input class="form-control uppercase" id="txtLogradouroNum" name="txtLogradouroNum" type="text" placeholder="Digite a informação solicitada" value="" />
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="mb-3 ">
                            <label class="small mt-2 mb-1 fw-bold" for="txtLogradouroComp">Informe o complemento da Residência: </label>
                            <input class="form-control uppercase" id="txtLogradouroComp" name="txtLogradouroComp" type="text" placeholder="Digite a informação solicitada" value="" />
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="mb-3 ">
                            <label class="small mt-2 mb-1 fw-bold" for="txtBairro">Informe o Bairro da Residência: *</label>
                            <input class="form-control uppercase" id="txtBairro" name="txtBairro" type="text" placeholder="Digite a informação solicitada" value="" />
                        </div>
                    </div>
                </div>

                <div class="mb-3 ">
                    <label class="small mt-2 mb-1 fw-bold" for="txtReferencia">Informe uma Referência da sua Residência:</label>
                    <input class="form-control uppercase" id="txtReferencia" name="txtReferencia" type="text" placeholder="Digite a informação solicitada" value="" />
                </div>

                <div class="row mt-3">
                    <div class="col-xl-3">
                        <div>
                            <label class="small mt-2 mb-1 fw-bold" for="txtResUF">Informe a UF da sua Residência:</label>
                            <select class="form-select select-uf" name="txtResUF" id="txtResUF" aria-label="Selecione...">
                                <option value="">Selecione ...</option>
                                @foreach ($tipouf as $item)
                                    @if ($item->uf === old('txtResUF', ''))
                                        <option value="{{ $item->uf }}" selected>{{ $item->uf }}</option>
                                    @else
                                        <option value="{{ $item->uf }}">{{ $item->uf }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="mb-3 ">
                            <label class="small mt-2 mb-1 fw-bold" for="txtResCidade">Informe a Cidade da sua Residência:</label>
                            <input class="form-control uppercase" id="txtResCidade" name="txtResCidade" type="text" placeholder="Digite a cidade da sua residência" value="" />
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-xl-5">
                        <label class="small mt-2 mb-1 pe-2 fw-bold" for="txtZona">Informe a Zona da Residência: *</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="txtZona" id="txtZona1" value="U" style="border: solid 1px">
                            <label class="small form-check-label" for="txtZona1">
                              Urbana
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="txtZona" id="txtZona2" value="R" style="border: solid 1px">
                            <label class="small form-check-label" for="txtZona2">
                             Rural
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="shadow-sm rounded my-4 p-4">
                <h6>INFORMAÇÕES DO CURSO</h6>
                <div class="mb-3 ">
                    <label class="small mt-2 mb-1 fw-bold" for="txtCursoInst">Informe o Nome da Instituição que está cursando: *</label>
                    <select class="form-select select-uf" name="txtCursoInst" id="txtCursoInst" aria-label="Selecione...">
                        <option value="" selected>Selecione ...</option>
                        <option value="COLÉGIO ESTADUAL CONSELHEIRO CARRÃO">COLÉGIO ESTADUAL CONSELHEIRO CARRÃO</option>
                        <option value="CENTRO ESTADUAL DE EDUCAÇÃO PROFISSIONALIZANTE - CEEP ASSAÍ">CENTRO ESTADUAL DE EDUCAÇÃO PROFISSIONALIZANTE - CEEP ASSAÍ</option>
                    </select>
                </div>

                <div class="mb-3 ">
                    <label class="small mt-2 mb-1 fw-bold" for="txtCursoSerie">Qual Série você estã cursando:: *</label>
                    <select class="form-select select-uf" name="txtCursoSerie" id="txtCursoSerie" aria-label="Selecione...">
                        <option value="" selected>Selecione ...</option>
                        <option value="1">1º ANO</option>
                        <option value="2">2º ANO</option>
                        <option value="3">3º ANO</option>
                    </select>
                </div>

                <div class="mb-3 ">
                    <label class="small mt-2 mb-1 fw-bold" for="txtTurno">Informe o Turno que Estuda:</label>
                    <select class="form-select select-uf" name="txtTurno" id="txtTurno" aria-label="Selecione...">
                        <option value="" selected>Selecione ...</option>
                        <option value="MANHÃ E TARDE">MANHÃ E TARDE</option>
                        <option value="MANHÃ">MANHÃ</option>
                        <option value="TARDE">TARDE</option>
                        <option value="NOITE">NOITE</option>
                    </select>
                </div>

            </div>

            <div class="shadow-sm rounded my-4 p-4">
                <h6>VAGA DESEJADA</h6>
                <div class="mb-3 ">
                    <label class="small mt-2 mb-1 fw-bold" for="txtVaga">Informe a Vaga de Estágio desejada: *</label>
                    <select class="form-select select-uf" name="txtVaga" id="txtVaga" aria-label="Selecione...">
                        <option value="" selected>Selecione ...</option>
                        <option value="ADMINISTRAÇÃO E RH">ADMINISTRAÇÃO E RH</option>
                        <option value="AGRICULTURA E MEIO AMBIENTE">AGRICULTURA E MEIO AMBIENTE</option>
                        <option value="ASSISTÊNCIA SOCIAL">ASSISTÊNCIA SOCIAL</option>
                        <option value="CIÊNCIA, TECNOLOGIA E INOVAÇÃO">CIÊNCIA, TECNOLOGIA E INOVAÇÃO</option>
                        <option value="CULTURA E TURISMO">CULTURA E TURISMO</option>
                        <option value="ENGENHARIA, URBANISMO E ARQUITETURA">ENGENHARIA, URBANISMO E ARQUITETURA</option>
                        <option value="EDUCAÇÃO">EDUCAÇÃO</option>
                        <option value="MATEMÁTICA, ECONOMIA E CONTABILIDADE">MATEMÁTICA, ECONOMIA E CONTABILIDADE</option>
                        <option value="SAÚDE">SAÚDE</option>
                        <option value="DIREITO">DIREITO</option>
                    </select>
                </div>

            </div>


            <div class="shadow-sm rounded my-4 p-4">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="form-check mt-4">
                            <input class="form-check-input" type="checkbox" value="S" name="txtVeracidade" id="txtVeracidade" style="border: solid 2px"
                            {{ "S" === old('txtVeracidade') ? 'checked' : '' }}
                            >
                            <label class="small form-check-label" for="txtVeracidade">
                            Declaro, para fins de direito, sob as penas do art. 299 do Código Penal Brasileiro que as informações apresentadas são verdadeiras e autênticas. Ademais, declaro que estou em concordância com o Edital nº 001/2025 e seus demais documentos publicados.
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="form-check mt-4">
                            <input class="form-check-input" type="checkbox" value="S" name="txtLGPD" id="txtLGPD" style="border: solid 2px"
                            {{ "S" === old('txtLGPD') ? 'checked' : '' }}
                            >
                            <label class="small form-check-label" for="txtLGPD">
                            Ao manifestar o registro no Programa de Estágio, o Titular e o Responsável Familiar consentem e concordam que a Prefeitura Municipal de Assaí, CNPJ nº 76.290.709/0001-30, com sede na Avenida Rio de Janeiro, 720 - Centro,
                            Assaí / PR, telefone: 43 3262-8306, e-mail secti@assai.pr.gov.br, doravante denominada Controladora, registre seus dados pessoais ou dados necessários ao usufruto de
                            serviços ofertados pela Administração Pública Municipal através do Gov.Assaí, bem como realize o tratamento de tais dados para a correta execução dos serviços públicos
                            do Município de Assaí/PR.
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-danger me-md-2" type="button" onclick="location.href='{{ route('estagios') }}';">< Cancelar</button>
                    <button class="btn btn-success me-md-2" id="btSave" type="submit">Registrar</button>
                </div>
            </div>

            <div id="messageBox" class="modal" tabindex="-1">
                    <div class="modal-dialog">
                      <div class="modal-content ">
                        <div class="modal-header bg-danger text-white">
                          <h5 class="modal-title">ERRO NO ENVIO DO FORMULÁRIO</h5>
                          <button type="button" class="btn-close" onclick="$('#messageBox').hide();" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" onclick="$('#messageBox').hide();">Fechar</button>
                        </div>
                      </div>
                    </div>
            </div>

            </form>
        </div>
    </div>

</div>
@endsection

@section('scripts')
<script src="{{ asset('scripts/jquery/jquery.js') }}"></script>
<script src="{{ asset('scripts/jquery/jquery.validate.min.js') }}"></script>
<script src="{{ asset('scripts/maskedinput/jquery-maskedinput.js') }}"></script>
<script src="{{ asset('scripts/fontawesome/all.min.js') }}"></script>
<script src="{{ asset('scripts/bootstrap/dist/5.3.1/bootstrap.bundle.min.js') }}"></script>

<script>
    $(document).ready(function () {
        $("#txtCPF").mask("999.999.999-99", {reverse: true});
        $("#txtRFCPF").mask("999.999.999-99", {reverse: true});
        $("#txtNascimento").mask("99/99/9999");
        $("#txtCelular").mask("(99) 99999-9999");
        $("#txtTelefone").mask("(99) 9999-9999");
        $("#txtTelRecado").mask("(99) 9999-9999");
        $("#txtCEP").mask("99.999-999");

        $('.numbers').keyup(function () {
            this.value = this.value.replace(/[^0-9\.]/g,'');
        });
    });
</script>

<script>
    $(function() {
        $bt = $('#btSave');
        $cb1 = $('#txtVeracidade');
        $cb2 = $('#txtLGPD');
        $bt.prop('disabled', true);

        $cb1.on('change', function() {
            if($cb1.is(':checked') && $cb2.is(':checked')) {
                $bt.prop('disabled', false);
            } else {
                $bt.prop('disabled', true);
            }
        });
        $cb2.on('change', function() {
            if($cb1.is(':checked') && $cb2.is(':checked')) {
                $bt.prop('disabled', false);
            } else {
                $bt.prop('disabled', true);
            }
        });

    });
</script>

<script type="text/javascript">

$( document ).ready( function () {
    $( "#formPre" ).validate( {
        errorContainer: "#messageBox",
        errorLabelContainer: "#messageBox .modal-body",
        wrapper: "li",
        rules: {
            txtSexo: "required",
            txtRaca: "required",
            txtCPF: "required",
            txtNome: "required",
            txtNascimento: "required",
            txtNacionalidade: "required",
            txtNaturalidade: "required",
            txtNaturalidadeUF: "required",
            txtRF: "required",
            txtRFNome: "required",
            txtRFCPF: "required",
            txtRG: "required",
            txtRGOrgao: "required",
            txtRGUF: "required",
            txtCEP: "required",
            txtLogradouroTipo: "required",
            txtLogradouro: "required",
            txtLogradouroNum: "required",
            txtBairro: "required",
            txtResUF: "required",
            txtResCidade: "required",
            txtZona: "required",
            txtCursoInst: "required",
            txtCursoSerie: "required",
            txtTurno: "required",
            txtVaga: "required",
        },
        messages: {
            txtSexo: "Informe seu gênero. É obrigatório para o cadastro",
            txtRaca: "Informe sua cor de pele. É obrigatório para o cadastro",
            txtCPF: "Informe seu CPF. É obrigatório para o cadastro",
            txtNome: "Informe seu Nome Completo. É obrigatório para o cadastro",
            txtNascimento: "Informe sua Data de Nascimento. É obrigatório para o cadastro",
            txtNacionalidade: "Informe sua Nacionalidade. É obrigatório para o cadastro",
            txtNaturalidade: "Informe a cidade que você nasceu. É obrigatório para o cadastro",
            txtNaturalidadeUF: "Informe o Estado (UF) da sua Nacionalidade. É obrigatório para o cadastro",
            txtRF: "Informe quem é o Responsável Familiar. É obrigatório para o cadastro",
            txtRFNome: "Informe o Nome do Responsável Familiar. É obrigatório para o cadastro",
            txtRFCPF: "Informe o CPF do Responsável Familiar. É obrigatório para o cadastro",
            txtRG: "Informe o Número da sua Identidade. É obrigatório para o cadastro",
            txtRGOrgao: "Informe o Órgão Expeditor da sua Identidade. É obrigatório para o cadastro",
            txtRGUF: "Informe o Estado do Órgão Expeditor da sua Identidade. É obrigatório para o cadastro",
            txtLogradouroTipo: "Informe o Tipo do Logradouro onde você mora. É obrigatório para o cadastro",
            txtCEP: "Informe o CEP do Logradouro. É obrigatório para o cadastro",
            txtLogradouro: "Informe o Nome do Logradouro onde você mora. É obrigatório para o cadastro",
            txtLogradouroNum: "Informe o Número da sua Residência. É obrigatório para o cadastro",
            txtBairro: "Informe o Bairro da sua Residência. É obrigatório para o cadastro",
            txtResUF: "Informe o Estado da sua Residência. É obrigatório para o cadastro",
            txtResCidade: "Informe a Cidade da sua Residência. É obrigatório para o cadastro",
            txtZona: "Informe se mora na Zona Urbana ou Rural. É obrigatório para o cadastro",
            txtCursoInst: "Informe a Instituição de Ensino Superior que está cursando. É obrigatório para o cadastro",
            txtCursoSerie: "Informe a sua Série no Ensino Médio",
            txtTurno: "Informe o Turno que você estuda. É obrigatório para o cadastro",
            txtVaga: "Informe a Vaga de Estágio desejada. É obrigatório para o cadastro",
        }
    });

});

</script>

@endsection
