<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta property="creator.productor" content="Igor Oliveira">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Programa de Estágio</title>
        <link rel="icon" href="https://conecta.assai.pr.gov.br/assets/img/favicon.png"/>
        <!-- Páginas CSS -->
        <link rel="stylesheet" href="https://conecta.assai.pr.gov.br/assets/scripts/bootstrap/dist/5.3.1/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
        <link href="https://conecta.assai.pr.gov.br/assets/css/site.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="col-xl-10 mx-auto">
            <!-- Account details card-->
            <div class="card mt-4">
                <div class="card-header painel-card-header">
                    <strong>Programa Municipal de Estágio - Ensino Superior</strong>
                </div>
                <div class="card-body">
                    <form action="https://conecta.assai.pr.gov.br/estagio/formularioES" method="post" id="formPre">
                        <input type="hidden" name="_token" value="gCHE5YvFmZy1UrOPY7RmPVD52cYheIwjROpSEViR">
                        <div class="shadow-sm rounded my-4 p-4">
                            <div class="row">
                                <div class="col-xl-4">
                                    <img src="https://conecta.assai.pr.gov.br/assets/img/logo_brasao.png" alt="Brasão do Município de Assaí" height="140">
                                </div>
                                <div class="col-xl-8">
                                    <h1 class="display-6">Vagas de Ensino Superior</h1>
                                    <p class="m-1">
                                        <strong>Processo Seletivo - Edital nº 002/2025</strong>
                                        - <a href="/arquivos/Edital_Estagio_002-2025.pdf" target="_blank">Acesse o Documento Aqui</a>
                                    </p>
                                    <p class="m-1">
                                        1. Preencha todos os dados abaixo, obrigatoriamente os marcados com <strong>*</strong>
                                        ;
                                    </p>
                                    <p class="m-1">2. Assinale os Termos de Consentimento para habilitar o Botão Registrar;</p>
                                    <p class="m-1">3. Clicar no Botão Registrar.</p>
                                    <span style="font-size: 10px; background-color: #008C32; color: white; padding: 3px; top: -3px; position: relative; margin-left: 0px;">OBS: Caso tenha problema com o cadastro, faça contato com a Secretaria de Ciência, Tecnologia e Inovação através do Telefone: (43) 3262-8306
                            </span>
                                    <span style="float: left; width: 100%;" class="small">
                                        Atendimento via WhatsApp: 
                                        <a href="https://wa.link/mjnxvb" target="_blank" style="text-decoration: none;">
                                            &nbsp;<img src="https://conecta.assai.pr.gov.br/assets/img/whatsapp.png" alt="Contato por WhatsApp" height="24">
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
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
                                        <label class="small form-check-label" for="txtSexo1">Feminino
                            </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="txtSexo" id="txtSexo2" value="M" style="border: solid 1px">
                                        <label class="small form-check-label" for="txtSexo2">Masculino
                            </label>
                                    </div>
                                </div>
                                <div class="col-xl-6 ml-4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="txtRaca" id="txtRaca4" value="4" style="border: solid 1px">
                                        <label class="small form-check-label" for="txtRaca1">Amarela
                            </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="txtRaca" id="txtRaca1" value="1" style="border: solid 1px">
                                        <label class="small form-check-label" for="txtRaca1">Branca
                            </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="txtRaca" id="txtRaca5" value="5" style="border: solid 1px">
                                        <label class="small form-check-label" for="txtRaca1">Indígena
                            </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="txtRaca" id="txtRaca3" value="3" style="border: solid 1px">
                                        <label class="small form-check-label" for="txtRaca1">Parda
                            </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="txtRaca" id="txtRaca2" value="2" style="border: solid 1px">
                                        <label class="small form-check-label" for="txtRaca1">Preta
                            </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 ">
                                <label class="small mb-1 fw-bold" for="txtCPF">Informe o número do seu CPF: *</label>
                                <input class="form-control" id="txtCPF" name="txtCPF" type="text" placeholder="Digite apenas os números" value=""/>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1 fw-bold" for="txtNome">Informe o seu Nome Completo: *</label>
                                <input class="form-control uppercase" id="txtNome" name="txtNome" type="text" placeholder="Digite seu Nome Completo igual do RG" value=""/>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1 fw-bold" for="txtNomeSocial">Informe o seu Nome Social</label>
                                <input class="form-control uppercase" id="txtNomeSocial" name="txtNomeSocial" type="text" placeholder="Digite seu Nome Social, caso tenha" value=""/>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1 fw-bold" for="txtNascimento">Informe sua Data de Nascimento: *</label>
                                <input class="form-control" id="txtNascimento" name="txtNascimento" type="text" placeholder="Digite sua Data de Nascimento" value=""/>
                            </div>
                            <div class="row mt-3">
                                <div class="col-xl-4">
                                    <div class="mb-3">
                                        <label class="small mb-1 fw-bold" for="txtNacionalidade">Informe o país que você nasceu (Nacionalidade): *</label>
                                        <select class="form-select select-uf" name="txtNacionalidade" aria-label="Selecione...">
                                            <option value="6">AD - Andorra</option>
                                            <option value="223">AE - Emirados Árabes Unidos</option>
                                            <option value="2">AF - Afeganistão</option>
                                            <option value="10">AG - Antigua e Barbuda</option>
                                            <option value="8">AI - Anguilla</option>
                                            <option value="3">AL - Albânia, Republica da</option>
                                            <option value="12">AM - Armênia, Republica da</option>
                                            <option value="258">AN - Bonaire</option>
                                            <option value="7">AO - Angola</option>
                                            <option value="259">AQ - Antartica</option>
                                            <option value="9">AQ - Antártida</option>
                                            <option value="11">AR - Argentina</option>
                                            <option value="5">AS - Samoa Americana</option>
                                            <option value="15">AT - Áustria</option>
                                            <option value="260">AU - Ilha Herad e Ilhas Macdonald</option>
                                            <option value="14">AU - Austrália</option>
                                            <option value="13">AW - Aruba</option>
                                            <option value="253">AX - Aland, Ilhas</option>
                                            <option value="16">AZ - Azerbaijão, Republica do</option>
                                            <option value="28">BA - Bósnia-herzegovina (Republica da)</option>
                                            <option value="20">BB - Barbados</option>
                                            <option value="19">BD - Bangladesh</option>
                                            <option value="22">BE - Bélgica</option>
                                            <option value="34">BF - Burkina Faso</option>
                                            <option value="33">BG - Bulgária, Republica da</option>
                                            <option value="18">BH - Bahrein, Ilhas</option>
                                            <option value="35">BI - Burundi</option>
                                            <option value="24">BJ - Benin</option>
                                            <option value="254">BL - Coletividade de São Bartolomeu</option>
                                            <option value="25">BM - Bermudas</option>
                                            <option value="32">BN - Brunei</option>
                                            <option value="27">BO - Bolívia</option>
                                            <option value="1" selected>BR - Brasil</option>
                                            <option value="17">BS - Bahamas, Ilhas</option>
                                            <option value="26">BT - Butão</option>
                                            <option value="30">BV - Bouvet, Ilha</option>
                                            <option value="29">BW - Botsuana</option>
                                            <option value="21">BY - Belarus, Republica da</option>
                                            <option value="23">BZ - Belize</option>
                                            <option value="38">CA - Canada</option>
                                            <option value="46">CC - Cocos (Keeling), Ilhas</option>
                                            <option value="50">CD - Congo, Republica Democrática do</option>
                                            <option value="41">CF - Republica Centro-Africana</option>
                                            <option value="49">CG - Congo</option>
                                            <option value="206">CH - Suíça</option>
                                            <option value="53">CI - Costa do Marfim</option>
                                            <option value="51">CK - Cook, Ilhas</option>
                                            <option value="43">CL - Chile</option>
                                            <option value="37">CM - Camarões</option>
                                            <option value="44">CN - China, Republica Popular</option>
                                            <option value="47">CO - Colômbia</option>
                                            <option value="52">CR - Costa Rica</option>
                                            <option value="55">CU - Cuba</option>
                                            <option value="39">CV - Cabo Verde, Republica de</option>
                                            <option value="255">CW - Curaçao</option>
                                            <option value="45">CX - Christmas, Ilha (Navidad)</option>
                                            <option value="56">CY - Chipre</option>
                                            <option value="57">CZ - Tcheca, Republica</option>
                                            <option value="82">DE - Alemanha</option>
                                            <option value="59">DJ - Djibuti</option>
                                            <option value="58">DK - Dinamarca</option>
                                            <option value="60">DM - Dominica, Ilha</option>
                                            <option value="61">DO - Republica Dominicana</option>
                                            <option value="4">DZ - Argélia</option>
                                            <option value="63">EC - Equador</option>
                                            <option value="68">EE - Estônia, Republica da</option>
                                            <option value="64">EG - Egito</option>
                                            <option value="235">EH - Saara Ocidental</option>
                                            <option value="67">ER - Eritreia</option>
                                            <option value="197">ES - Espanha</option>
                                            <option value="69">ET - Etiópia</option>
                                            <option value="73">FI - Finlândia</option>
                                            <option value="72">FJ - Fiji</option>
                                            <option value="70">FK - Falkland (Ilhas Malvinas)</option>
                                            <option value="141">FM - Micronesia</option>
                                            <option value="71">FO - Feroe, Ilhas</option>
                                            <option value="261">FR - São Bartolomeu</option>
                                            <option value="74">FR - Franca</option>
                                            <option value="79">GA - Gabão</option>
                                            <option value="224">GB - Reino Unido</option>
                                            <option value="87">GD - Granada</option>
                                            <option value="81">GE - Georgia, Republica da</option>
                                            <option value="76">GF - Guiana francesa</option>
                                            <option value="240">GG - Guernsey, Ilha do Canal (Inclui Alderney e Sark)</option>
                                            <option value="83">GH - Gana</option>
                                            <option value="84">GI - Gibraltar</option>
                                            <option value="86">GL - Groenlândia</option>
                                            <option value="80">GM - Gambia</option>
                                            <option value="91">GN - Guine</option>
                                            <option value="88">GP - Guadalupe</option>
                                            <option value="66">GQ - Guine-Equatorial</option>
                                            <option value="85">GR - Grécia</option>
                                            <option value="196">GS - Ilhas Geórgia do Sul e Sandwich do Sul</option>
                                            <option value="90">GT - Guatemala</option>
                                            <option value="89">GU - Guam</option>
                                            <option value="92">GW - Guine-Bissau</option>
                                            <option value="93">GY - Guiana</option>
                                            <option value="98">HK - Hong Kong</option>
                                            <option value="95">HM - Ilha Heard e Ilhas McDonald</option>
                                            <option value="97">HN - Honduras</option>
                                            <option value="54">HR - Croácia (Republica da)</option>
                                            <option value="94">HT - Haiti</option>
                                            <option value="99">HU - Hungria, Republica da</option>
                                            <option value="102">ID - Indonésia</option>
                                            <option value="105">IE - Irlanda</option>
                                            <option value="106">IL - Israel</option>
                                            <option value="243">IM - Man, Ilha de</option>
                                            <option value="101">IN - Índia</option>
                                            <option value="31">IO - Território Britânico do Oceano Indico</option>
                                            <option value="104">IQ - Iraque</option>
                                            <option value="103">IR - Ira, Republica Islâmica do</option>
                                            <option value="100">IS - Islândia</option>
                                            <option value="107">IT - Itália</option>
                                            <option value="241">JE - Jersey, Ilha do Canal</option>
                                            <option value="108">JM - Jamaica</option>
                                            <option value="110">JO - Jordânia</option>
                                            <option value="109">JP - Japão</option>
                                            <option value="112">KE - Quênia</option>
                                            <option value="117">KG - Quirguiz, Republica</option>
                                            <option value="36">KH - Camboja</option>
                                            <option value="113">KI - Kiribati</option>
                                            <option value="48">KM - Comores, Ilhas</option>
                                            <option value="180">KN - São Cristovão e Neves, Ilhas</option>
                                            <option value="114">KP - Coreia, Republica Popular Democrática da</option>
                                            <option value="115">KR - Coreia, Republica da</option>
                                            <option value="116">KW - Kuwait</option>
                                            <option value="40">KY - Cayman, Ilhas</option>
                                            <option value="111">KZ - Cazaquistão, Republica do</option>
                                            <option value="118">LA - Laos, Republica Popular Democrática do</option>
                                            <option value="120">LB - Líbano</option>
                                            <option value="181">LC - Santa Lucia</option>
                                            <option value="124">LI - Liechtenstein</option>
                                            <option value="198">LK - Sri Lanka</option>
                                            <option value="122">LR - Libéria</option>
                                            <option value="121">LS - Lesoto</option>
                                            <option value="125">LT - Lituânia, Republica da</option>
                                            <option value="126">LU - Luxemburgo</option>
                                            <option value="119">LV - Letônia, Republica da</option>
                                            <option value="123">LY - Líbia</option>
                                            <option value="146">MA - Marrocos</option>
                                            <option value="143">MC - Mônaco</option>
                                            <option value="142">MD - Moldávia, Republica da</option>
                                            <option value="246">ME - Montenegro</option>
                                            <option value="129">MG - Madagascar</option>
                                            <option value="135">MH - Marshall, Ilhas</option>
                                            <option value="128">MK - Macedônia do Norte</option>
                                            <option value="133">ML - Mali</option>
                                            <option value="148">MM - Mianmar (Birmânia)</option>
                                            <option value="144">MN - Mongólia</option>
                                            <option value="127">MO - Macau</option>
                                            <option value="161">MP - Marianas do Norte</option>
                                            <option value="136">MQ - Martinica</option>
                                            <option value="137">MR - Mauritânia</option>
                                            <option value="145">MS - Montserrat, Ilhas</option>
                                            <option value="134">MT - Malta</option>
                                            <option value="138">MU - Mauricio</option>
                                            <option value="132">MV - Maldivas</option>
                                            <option value="130">MW - Malavi</option>
                                            <option value="140">MX - México</option>
                                            <option value="131">MY - Malásia</option>
                                            <option value="147">MZ - Moçambique</option>
                                            <option value="149">NA - Namíbia</option>
                                            <option value="154">NC - Nova Caledonia</option>
                                            <option value="157">NE - Níger</option>
                                            <option value="160">NF - Norfolk, Ilha</option>
                                            <option value="158">NG - Nigéria</option>
                                            <option value="156">NI - Nicarágua</option>
                                            <option value="152">NL - Países Baixos (Holanda)</option>
                                            <option value="162">NO - Noruega</option>
                                            <option value="151">NP - Nepal</option>
                                            <option value="150">NR - Nauru</option>
                                            <option value="159">NU - Niue, Ilha</option>
                                            <option value="155">NZ - Nova Zelândia</option>
                                            <option value="163">OM - Oma</option>
                                            <option value="166">PA - Panamá</option>
                                            <option value="169">PE - Peru</option>
                                            <option value="77">PF - Polinésia Francesa</option>
                                            <option value="167">PG - Papua Nova Guine</option>
                                            <option value="170">PH - Filipinas</option>
                                            <option value="164">PK - Paquistão</option>
                                            <option value="172">PL - Polônia, Republica da</option>
                                            <option value="200">PM - São Pedro e Miquelon</option>
                                            <option value="171">PN - Pitcairn, Ilha</option>
                                            <option value="174">PR - Porto Rico</option>
                                            <option value="252">PS - Palestina</option>
                                            <option value="173">PT - Portugal</option>
                                            <option value="165">PW - Palau</option>
                                            <option value="168">PY - Paraguai</option>
                                            <option value="175">QA - Catar</option>
                                            <option value="176">RE - Reunião, Ilha</option>
                                            <option value="177">RO - Romênia</option>
                                            <option value="247">RS - Republika Srbija</option>
                                            <option value="178">RU - Rússia, Federação da</option>
                                            <option value="179">RW - Ruanda</option>
                                            <option value="186">SA - Arábia Saudita</option>
                                            <option value="193">SB - Salomão, Ilhas</option>
                                            <option value="188">SC - Seychelles</option>
                                            <option value="201">SD - Sudão</option>
                                            <option value="205">SE - Suécia</option>
                                            <option value="190">SG - Cingapura</option>
                                            <option value="199">SH - Santa Helena</option>
                                            <option value="192">SI - Eslovênia, Republica da</option>
                                            <option value="203">SJ - Svalbard e Jan Mayen</option>
                                            <option value="191">SK - Eslovaca, Republica</option>
                                            <option value="189">SL - Serra Leoa</option>
                                            <option value="262">SM - São Martinho, Ilha de (Parte Holandesa)</option>
                                            <option value="256">SM - São Martinho, Ilha de (Parte Francesa)</option>
                                            <option value="184">SM - San Marino</option>
                                            <option value="187">SN - Senegal</option>
                                            <option value="194">SO - Somalia</option>
                                            <option value="202">SR - Suriname</option>
                                            <option value="248">SS - Sudao do Sul</option>
                                            <option value="185">ST - São Tome e Príncipe, Ilhas</option>
                                            <option value="65">SV - El Salvador</option>
                                            <option value="207">SY - Síria, Republica Árabe da</option>
                                            <option value="204">SZ - Eswatini</option>
                                            <option value="219">TC - Turcas e Caicos, Ilhas</option>
                                            <option value="42">TD - Chade</option>
                                            <option value="263">TF - Terras Austrais e Antárcticas Francesas</option>
                                            <option value="78">TF - Terras Austrais e Antárticas Francesas</option>
                                            <option value="212">TG - Togo</option>
                                            <option value="211">TH - Tailândia</option>
                                            <option value="209">TJ - Tadjiquistao, Republica do</option>
                                            <option value="213">TK - Toquelau, Ilhas</option>
                                            <option value="62">TL - Timor Leste</option>
                                            <option value="218">TM - Turcomenistão, Republica do</option>
                                            <option value="216">TN - Tunísia</option>
                                            <option value="214">TO - Tonga</option>
                                            <option value="217">TR - Turquia</option>
                                            <option value="215">TT - Trinidad e Tobago</option>
                                            <option value="220">TV - Tuvalu</option>
                                            <option value="208">TW - Formosa (Taiwan)</option>
                                            <option value="210">TZ - Tanzânia, Republica Unida da</option>
                                            <option value="222">UA - Ucrânia</option>
                                            <option value="221">UG - Uganda</option>
                                            <option value="226">UM - Ilhas Menores Distantes dos Estados Unidos</option>
                                            <option value="225">US - Estados Unidos</option>
                                            <option value="227">UY - Uruguai</option>
                                            <option value="228">UZ - Uzbequistão, Republica do</option>
                                            <option value="96">VA - Vaticano, Estado da Cidade do</option>
                                            <option value="182">VC - São Vicente e Granadinas</option>
                                            <option value="230">VE - Venezuela</option>
                                            <option value="232">VG - Virgens, Ilhas (Britânicas)</option>
                                            <option value="233">VI - Virgens, Ilhas (E.U.A.)</option>
                                            <option value="231">VN - Vietnã</option>
                                            <option value="229">VU - Vanuatu</option>
                                            <option value="234">WF - Wallis e Futuna, Ilhas</option>
                                            <option value="183">WS - Samoa</option>
                                            <option value="236">YE - Iémen</option>
                                            <option value="139">YT - Mayotte (Ilhas Francesas)</option>
                                            <option value="237">YU - Iugoslávia, República Fed. da</option>
                                            <option value="195">ZA - África do Sul</option>
                                            <option value="238">ZM - Zâmbia</option>
                                            <option value="239">ZW - Zimbabue</option>
                                            <option value="249">- Zona do Canal do Panamá</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-5">
                                    <div class="mb-3 ">
                                        <label class="small mb-1 fw-bold" for="txtNaturalidade">Informe a cidade que você nasceu (Naturalidade): *</label>
                                        <input class="form-control uppercase" id="txtNaturalidade" name="txtNaturalidade" type="text" placeholder="Digite o nome da cidade" value=""/>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="mb-3 ">
                                        <label class="small mb-1 fw-bold" for="txtNaturalidadeUF">Informe a UF da Naturalidade: *</label>
                                        <select class="form-select select-uf" name="txtNaturalidadeUF" aria-label="Selecione...">
                                            <option value="">Selecione ...</option>
                                            <option value="AC">AC</option>
                                            <option value="AL">AL</option>
                                            <option value="AM">AM</option>
                                            <option value="AP">AP</option>
                                            <option value="BA">BA</option>
                                            <option value="CE">CE</option>
                                            <option value="DF">DF</option>
                                            <option value="ES">ES</option>
                                            <option value="GO">GO</option>
                                            <option value="MA">MA</option>
                                            <option value="MG">MG</option>
                                            <option value="MS">MS</option>
                                            <option value="MT">MT</option>
                                            <option value="PA">PA</option>
                                            <option value="PB">PB</option>
                                            <option value="PE">PE</option>
                                            <option value="PI">PI</option>
                                            <option value="PR">PR</option>
                                            <option value="RJ">RJ</option>
                                            <option value="RN">RN</option>
                                            <option value="RO">RO</option>
                                            <option value="RR">RR</option>
                                            <option value="SC">SC</option>
                                            <option value="SE">SE</option>
                                            <option value="SP">SP</option>
                                            <option value="TO">TO</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shadow-sm rounded my-4 p-4">
                            <h6>CONTATOS</h6>
                            <div class="mb-3 ">
                                <label class="small mb-1 fw-bold" for="txtEmail">Informe o seu E-mail</label>
                                <input class="form-control" id="txtEmail" name="txtEmail" type="text" placeholder="Digite seu e-mail" value=""/>
                            </div>
                            <div class="row mt-3">
                                <div class="col-xl-10">
                                    <div class="mb-3 ">
                                        <label class="small mb-1 fw-bold" for="txtCelular">Informe o seu Celular</label>
                                        <input class="form-control" id="txtCelular" name="txtCelular" type="text" placeholder="Digite apenas os números" value=""/>
                                    </div>
                                </div>
                                <div class="col-xl-2">
                                    <div class="form-check mt-4">
                                        <input class="form-check-input" type="checkbox" value="S" id="txtCelularWA" name="txtCelularWA" style="border: solid 1px">
                                        <label class="small form-check-label" for="txtCelularWA">Marque aqui se o número é WhatsApp?
                            </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 ">
                                <label class="small mb-1 fw-bold" for="txtTelefone">Informe o seu Telefone Residencial</label>
                                <input class="form-control" id="txtTelefone" name="txtTelefone" type="text" placeholder="Digite apenas os números" value=""/>
                            </div>
                            <div class="row mt-3">
                                <div class="col-xl-6">
                                    <div class="mb-3 ">
                                        <label class="small mb-1 fw-bold" for="txtTelRecado">Informe o um Telefone de Recado</label>
                                        <input class="form-control" id="txtTelRecado" name="txtTelRecado" type="text" placeholder="Digite apenas os números" value=""/>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-3 ">
                                        <label class="small mb-1 fw-bold" for="txtNomeRecado">Falar com</label>
                                        <input class="form-control uppercase" id="txtNomeRecado" name="txtNomeRecado" type="text" placeholder="Digite o nome da pessoa de recado" value=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shadow-sm rounded my-4 p-4">
                            <h6>RESPONSÁVEL FAMILIAR</h6>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="txtRF" id="txtRF1" value="P" checked style="border: solid 1px">
                                <label class="small form-check-label" for="txtRF1">Pai
                    </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="txtRF" id="txtRF2" value="M" style="border: solid 1px">
                                <label class="small form-check-label" for="txtRF2">Mãe
                    </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="txtRF" id="txtRF3" value="R" style="border: solid 1px">
                                <label class="small form-check-label" for="txtRF3">Outro Responsável Legal
                    </label>
                            </div>
                            <div class="mb-3 ">
                                <label class="small mt-2 mb-1 fw-bold" for="txtRFNome">Nome do Responsável Familiar</label>
                                <input class="form-control uppercase" id="txtRFNome" name="txtRFNome" type="text" placeholder="Digite o Nome do RF" value=""/>
                            </div>
                            <div class="mb-3 ">
                                <label class="small mt-2 mb-1 fw-bold" for="txtRFCPF">CPF do Responsável Familiar</label>
                                <input class="form-control" id="txtRFCPF" name="txtRFCPF" type="text" placeholder="Digite apenas os números" value=""/>
                            </div>
                        </div>
                        <div class="shadow-sm rounded my-4 p-4">
                            <h6>DOCUMENTOS</h6>
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="mb-3 ">
                                        <label class="small mt-2 mb-1 fw-bold" for="txtRG">Informe o número da sua Identidade (RG): *</label>
                                        <input class="form-control numbers" id="txtRG" name="txtRG" type="text" placeholder="Digite apenas os números" value=""/>
                                    </div>
                                </div>
                                <div class="col-xl-5">
                                    <div class="mb-3 ">
                                        <label class="small mt-2 mb-1 fw-bold" for="txtRGOrgao">Informe o Órgão de Emissão (RG): *</label>
                                        <input class="form-control uppercase" name="txtRGOrgao" id="txtRGOrgao" type="text" placeholder="Digite o nome do órgão" value=""/>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div>
                                        <label class="small mt-2 mb-1 fw-bold" for="txtRGUF">Informe a UF de Emissão (RG): *</label>
                                        <select class="form-select select-uf" name="txtRGUF" aria-label="Selecione...">
                                            <option value="">Selecione ...</option>
                                            <option value="AC">AC</option>
                                            <option value="AL">AL</option>
                                            <option value="AM">AM</option>
                                            <option value="AP">AP</option>
                                            <option value="BA">BA</option>
                                            <option value="CE">CE</option>
                                            <option value="DF">DF</option>
                                            <option value="ES">ES</option>
                                            <option value="GO">GO</option>
                                            <option value="MA">MA</option>
                                            <option value="MG">MG</option>
                                            <option value="MS">MS</option>
                                            <option value="MT">MT</option>
                                            <option value="PA">PA</option>
                                            <option value="PB">PB</option>
                                            <option value="PE">PE</option>
                                            <option value="PI">PI</option>
                                            <option value="PR">PR</option>
                                            <option value="RJ">RJ</option>
                                            <option value="RN">RN</option>
                                            <option value="RO">RO</option>
                                            <option value="RR">RR</option>
                                            <option value="SC">SC</option>
                                            <option value="SE">SE</option>
                                            <option value="SP">SP</option>
                                            <option value="TO">TO</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="mb-3 ">
                                        <label class="small mt-2 mb-1 fw-bold" for="txtCNH">Informe o número da sua Carteira de Motorista (CNH):</label>
                                        <input class="form-control numbers" id="txtCNH" name="txtCNH" type="text" placeholder="Digite apenas os números" value=""/>
                                    </div>
                                </div>
                                <div class="col-xl-5">
                                    <div class="mb-3 ">
                                        <label class="small mt-2 mb-1 fw-bold" for="txtCNHSerie">Informe a Categoria da sua CNH:</label>
                                        <select class="form-select select-uf" name="txtCNHSerie" id="txtCNHSerie" aria-label="Selecione...">
                                            <option value="" selected>Selecione ...</option>
                                            <option value="A">CATEGORIA A</option>
                                            <option value="B">CATEGORIA B</option>
                                            <option value="C">CATEGORIA C</option>
                                            <option value="D">CATEGORIA D</option>
                                            <option value="E">CATEGORIA E</option>
                                            <option value="AB">CATEGORIA AB</option>
                                            <option value="AC">CATEGORIA AC</option>
                                            <option value="AD">CATEGORIA AD</option>
                                            <option value="AE">CATEGORIA AE</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div>
                                        <label class="small mt-2 mb-1 fw-bold" for="txtCNHUF">Informe a UF da CNH:</label>
                                        <select class="form-select select-uf" name="txtCNHUF" id="txtCNHUF" aria-label="Selecione...">
                                            <option value="">Selecione ...</option>
                                            <option value="AC">AC</option>
                                            <option value="AL">AL</option>
                                            <option value="AM">AM</option>
                                            <option value="AP">AP</option>
                                            <option value="BA">BA</option>
                                            <option value="CE">CE</option>
                                            <option value="DF">DF</option>
                                            <option value="ES">ES</option>
                                            <option value="GO">GO</option>
                                            <option value="MA">MA</option>
                                            <option value="MG">MG</option>
                                            <option value="MS">MS</option>
                                            <option value="MT">MT</option>
                                            <option value="PA">PA</option>
                                            <option value="PB">PB</option>
                                            <option value="PE">PE</option>
                                            <option value="PI">PI</option>
                                            <option value="PR">PR</option>
                                            <option value="RJ">RJ</option>
                                            <option value="RN">RN</option>
                                            <option value="RO">RO</option>
                                            <option value="RR">RR</option>
                                            <option value="SC">SC</option>
                                            <option value="SE">SE</option>
                                            <option value="SP">SP</option>
                                            <option value="TO">TO</option>
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
                                <label class="small form-check-label" for="txtPCD1">Sim
                    </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="txtPCD" id="txtPCD2" value="N" checked style="border: solid 1px">
                                <label class="small form-check-label" for="txtPCD2">Não
                    </label>
                            </div>
                            <label class="small mb-1 pe-2 fw-bold" for="txtPCDQ1">Qual(is)?</label>
                            <div class="form-check form-check-inline form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name="txtPCDQ[]" id="txtPCDQ1" value="1">
                                <label class="small form-check-label" for="txtPCDQ">Auditiva</label>
                            </div>
                            <div class="form-check form-check-inline form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name="txtPCDQ[]" id="txtPCDQ4" value="4">
                                <label class="small form-check-label" for="txtPCDQ">Física</label>
                            </div>
                            <div class="form-check form-check-inline form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name="txtPCDQ[]" id="txtPCDQ3" value="3">
                                <label class="small form-check-label" for="txtPCDQ">Intelectual / Cognitiva</label>
                            </div>
                            <div class="form-check form-check-inline form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name="txtPCDQ[]" id="txtPCDQ5" value="5">
                                <label class="small form-check-label" for="txtPCDQ">Outra</label>
                            </div>
                            <div class="form-check form-check-inline form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name="txtPCDQ[]" id="txtPCDQ2" value="2">
                                <label class="small form-check-label" for="txtPCDQ">Visual</label>
                            </div>
                        </div>
                        <div class="shadow-sm rounded my-4 p-4">
                            <h6>ENDEREÇO ATUAL</h6>
                            <div class="mb-3 ">
                                <label class="small mt-2 mb-1 fw-bold" for="txtCEP">Informe o CEP da sua Residência: *</label>
                                <input class="form-control uppercase" id="txtCEP" name="txtCEP" type="text" placeholder="Digite o CEP do seu endereço" value=""/>
                            </div>
                            <div>
                                <label class="small mt-2 mb-1 fw-bold" for="txtLogradouroTipo">Informe o Tipo de Logradouro da sua Residência: *</label>
                                <select class="form-select select-uf" name="txtLogradouroTipo" aria-label="Selecione...">
                                    <option value="1">ALAMEDA</option>
                                    <option value="2">AVENIDA</option>
                                    <option value="3">CHÁCARA</option>
                                    <option value="4">COLÔNIA</option>
                                    <option value="5">CONDOMÍNIO</option>
                                    <option value="6">CONJUNTO</option>
                                    <option value="7">ESTRADA</option>
                                    <option value="8">JARDIM</option>
                                    <option value="9">LADEIRA</option>
                                    <option value="10">LARGO</option>
                                    <option value="11">LOTEAMENTO</option>
                                    <option value="12">PARQUE</option>
                                    <option value="13">PASSARELA</option>
                                    <option value="14">PRAÇA</option>
                                    <option value="15">QUADRA</option>
                                    <option value="16">RESIDENCIAL</option>
                                    <option value="17" selected>RUA</option>
                                    <option value="18">SÍTIO</option>
                                    <option value="19">TRAVESSA</option>
                                    <option value="20">VIA</option>
                                    <option value="21">VIELA</option>
                                    <option value="22">VILA</option>
                                </select>
                            </div>
                            <div class="mb-3 ">
                                <label class="small mt-2 mb-1 fw-bold" for="txtLogradouro">Informe o Nome do Logradouro (Nome da Rua, Avenida etc) da sua Residência: *</label>
                                <input class="form-control uppercase" id="txtLogradouro" name="txtLogradouro" type="text" placeholder="Digite seu endereço" value=""/>
                            </div>
                            <div class="row">
                                <div class="col-xl-2">
                                    <div class="mb-3 ">
                                        <label class="small mt-2 mb-1 fw-bold" for="txtLogradouroNum">Informe o Número: *</label>
                                        <input class="form-control uppercase" id="txtLogradouroNum" name="txtLogradouroNum" type="text" placeholder="Digite a informação solicitada" value=""/>
                                    </div>
                                </div>
                                <div class="col-xl-7">
                                    <div class="mb-3 ">
                                        <label class="small mt-2 mb-1 fw-bold" for="txtLogradouroComp">Informe o complemento da Residência: </label>
                                        <input class="form-control uppercase" id="txtLogradouroComp" name="txtLogradouroComp" type="text" placeholder="Digite a informação solicitada" value=""/>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="mb-3 ">
                                        <label class="small mt-2 mb-1 fw-bold" for="txtBairro">Informe o Bairro da Residência: *</label>
                                        <input class="form-control uppercase" id="txtBairro" name="txtBairro" type="text" placeholder="Digite a informação solicitada" value=""/>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 ">
                                <label class="small mt-2 mb-1 fw-bold" for="txtReferencia">Informe uma Referência da sua Residência:</label>
                                <input class="form-control uppercase" id="txtReferencia" name="txtReferencia" type="text" placeholder="Digite a informação solicitada" value=""/>
                            </div>
                            <div class="row mt-3">
                                <div class="col-xl-3">
                                    <div>
                                        <label class="small mt-2 mb-1 fw-bold" for="txtResUF">Informe a UF da sua Residência:</label>
                                        <select class="form-select select-uf" name="txtResUF" id="txtResUF" aria-label="Selecione...">
                                            <option value="">Selecione ...</option>
                                            <option value="AC">AC</option>
                                            <option value="AL">AL</option>
                                            <option value="AM">AM</option>
                                            <option value="AP">AP</option>
                                            <option value="BA">BA</option>
                                            <option value="CE">CE</option>
                                            <option value="DF">DF</option>
                                            <option value="ES">ES</option>
                                            <option value="GO">GO</option>
                                            <option value="MA">MA</option>
                                            <option value="MG">MG</option>
                                            <option value="MS">MS</option>
                                            <option value="MT">MT</option>
                                            <option value="PA">PA</option>
                                            <option value="PB">PB</option>
                                            <option value="PE">PE</option>
                                            <option value="PI">PI</option>
                                            <option value="PR">PR</option>
                                            <option value="RJ">RJ</option>
                                            <option value="RN">RN</option>
                                            <option value="RO">RO</option>
                                            <option value="RR">RR</option>
                                            <option value="SC">SC</option>
                                            <option value="SE">SE</option>
                                            <option value="SP">SP</option>
                                            <option value="TO">TO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-9">
                                    <div class="mb-3 ">
                                        <label class="small mt-2 mb-1 fw-bold" for="txtResCidade">Informe a Cidade da sua Residência:</label>
                                        <input class="form-control uppercase" id="txtResCidade" name="txtResCidade" type="text" placeholder="Digite a cidade da sua residência" value=""/>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-xl-5">
                                    <label class="small mt-2 mb-1 pe-2 fw-bold" for="txtZona">Informe a Zona da Residência: *</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="txtZona" id="txtZona1" value="U" style="border: solid 1px">
                                        <label class="small form-check-label" for="txtZona1">Urbana
                            </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="txtZona" id="txtZona2" value="R" style="border: solid 1px">
                                        <label class="small form-check-label" for="txtZona2">Rural
                            </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shadow-sm rounded my-4 p-4">
                            <h6>INFORMAÇÕES DO CURSO</h6>
                            <div class="mb-3 ">
                                <label class="small mt-2 mb-1 fw-bold" for="txtCursoInst">Informe o Nome da Instituição que está cursando: *</label>
                                <input class="form-control uppercase" id="txtCursoInst" name="txtCursoInst" type="text" placeholder="Digite o nome" value=""/>
                            </div>
                            <div class="mb-3 ">
                                <label class="small mt-2 mb-1 fw-bold" for="txtCurso">Informe o Nome do Curso que está fazendo: *</label>
                                <input class="form-control uppercase" id="txtCurso" name="txtCurso" type="text" placeholder="Digite o nome" value=""/>
                            </div>
                            <div class="mb-3 ">
                                <label class="small mt-2 mb-1 fw-bold" for="txtCursoSemestres">Quantos Semestres tem o Curso: *</label>
                                <select class="form-select select-uf" name="txtCursoSemestres" id="txtCursoSemestres" aria-label="Selecione...">
                                    <option value="" selected>Selecione ...</option>
                                    <option value="1">1 SEMESTRE</option>
                                    <option value="2">2 SEMESTRES</option>
                                    <option value="3">3 SEMESTRES</option>
                                    <option value="4">4 SEMESTRES</option>
                                    <option value="5">5 SEMESTRES</option>
                                    <option value="6">6 SEMESTRES</option>
                                    <option value="7">7 SEMESTRES</option>
                                    <option value="8">8 SEMESTRES</option>
                                    <option value="9">9 SEMESTRES</option>
                                    <option value="10">10 SEMESTRES</option>
                                    <option value="11">11 SEMESTRES</option>
                                    <option value="12">12 SEMESTRES</option>
                                    <option value="13">13 SEMESTRES</option>
                                    <option value="14">14 SEMESTRES</option>
                                    <option value="15">15 SEMESTRES</option>
                                    <option value="16">16 SEMESTRES</option>
                                </select>
                            </div>
                            <div class="mb-3 ">
                                <label class="small mt-2 mb-1 fw-bold" for="txtCursando">Qual Semestre está cursando: *</label>
                                <select class="form-select select-uf" name="txtCursando" id="txtCursando" aria-label="Selecione...">
                                    <option value="" selected>Selecione ...</option>
                                    <option value="1">1º SEMESTRE</option>
                                    <option value="2">2º SEMESTRE</option>
                                    <option value="3">3º SEMESTRE</option>
                                    <option value="4">4º SEMESTRE</option>
                                    <option value="5">5º SEMESTRE</option>
                                    <option value="6">6º SEMESTRE</option>
                                    <option value="7">7º SEMESTRE</option>
                                    <option value="8">8º SEMESTRE</option>
                                    <option value="9">9º SEMESTRE</option>
                                    <option value="10">10º SEMESTRE</option>
                                    <option value="11">11º SEMESTRE</option>
                                    <option value="12">12º SEMESTRE</option>
                                    <option value="13">13º SEMESTRE</option>
                                    <option value="14">14º SEMESTRE</option>
                                    <option value="15">15º SEMESTRE</option>
                                    <option value="16">16º SEMESTRE</option>
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
                                    <option value="ADMINISTRAÇÃO">ADMINISTRAÇÃO</option>
                                    <option value="JORNALISMO, MARKETING, PUBLICIDADE E PROPAGANDA, RELAÇÕES PÚBLICAS OU ÁREAS AFINS">JORNALISMO, MARKETING, PUBLICIDADE E PROPAGANDA, RELAÇÕES PÚBLICAS OU ÁREAS AFINS</option>
                                    <option value="ENGENHARIA DA COMPUTAÇÃO, CIÊNCIAS DA COMPUTAÇÃO, ANÁLISE DE DESENVOLVIMENTO DE SISTEMAS OU ÁREAS AFINS">ENGENHARIA DA COMPUTAÇÃO, CIÊNCIAS DA COMPUTAÇÃO, ANÁLISE DE DESENVOLVIMENTO DE SISTEMAS OU ÁREAS AFINS</option>
                                </select>
                            </div>
                        </div>
                        <div class="shadow-sm rounded my-4 p-4">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-check mt-4">
                                        <input class="form-check-input" type="checkbox" value="S" name="txtVeracidade" id="txtVeracidade" style="border: solid 2px">
                                        <label class="small form-check-label" for="txtVeracidade">Declaro, para fins de direito, sob as penas do art. 299 do Código Penal Brasileiro que as informações apresentadas são verdadeiras e autênticas.  Ademais, declaro que estou em concordância com o Edital nº 001/2025 e seus demais documentos publicados.
                            </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-check mt-4">
                                        <input class="form-check-input" type="checkbox" value="S" name="txtLGPD" id="txtLGPD" style="border: solid 2px">
                                        <label class="small form-check-label" for="txtLGPD">Ao manifestar o registro no Programa de Estágio, o Titular consente e concorda que a Prefeitura Municipal de Assaí, CNPJ nº 76.290.709/0001-30, com sede na Avenida Rio de Janeiro, 720 - Centro,
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
                                <button class="btn btn-danger me-md-2" type="button" onclick="location.href='https://conecta.assai.pr.gov.br/estagios';">
                                    <Cancelar </button>
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
                                    <div class="modal-body"></div>
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
        <script src="https://conecta.assai.pr.gov.br/assets/scripts/jquery/jquery.js"></script>
        <script src="https://conecta.assai.pr.gov.br/assets/scripts/jquery/jquery.validate.min.js"></script>
        <script src="https://conecta.assai.pr.gov.br/assets/scripts/maskedinput/jquery-maskedinput.js"></script>
        <script src="https://conecta.assai.pr.gov.br/assets/scripts/fontawesome/all.min.js"></script>
        <script src="https://conecta.assai.pr.gov.br/assets/scripts/bootstrap/dist/5.3.1/bootstrap.bundle.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#txtCPF").mask("999.999.999-99", {
                    reverse: true
                });
                $("#txtRFCPF").mask("999.999.999-99", {
                    reverse: true
                });
                $("#txtNascimento").mask("99/99/9999");
                $("#txtCelular").mask("(99) 99999-9999");
                $("#txtTelefone").mask("(99) 9999-9999");
                $("#txtTelRecado").mask("(99) 9999-9999");
                $("#txtCEP").mask("99.999-999");

                $('.numbers').keyup(function() {
                    this.value = this.value.replace(/[^0-9\.]/g, '');
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
                    if ($cb1.is(':checked') && $cb2.is(':checked')) {
                        $bt.prop('disabled', false);
                    } else {
                        $bt.prop('disabled', true);
                    }
                });
                $cb2.on('change', function() {
                    if ($cb1.is(':checked') && $cb2.is(':checked')) {
                        $bt.prop('disabled', false);
                    } else {
                        $bt.prop('disabled', true);
                    }
                });

            });
        </script>
        <script type="text/javascript">

            $(document).ready(function() {
                $("#formPre").validate({
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
                        txtCurso: "required",
                        txtCursoSemestres: "required",
                        txtCursando: "required",
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
                        txtCurso: "Informe o Nome do Curso. É obrigatório para o cadastro",
                        txtCursoSemestres: "Informe quantos semestres tem seu curso. É obrigatório para o cadastro",
                        txtCursando: "Informe o Semestre que está cursando. É obrigatório para o cadastro",
                        txtTurno: "Informe o Turno que você estuda. É obrigatório para o cadastro",
                        txtVaga: "Informe a Vaga de Estágio desejada. É obrigatório para o cadastro",
                    }
                });

            });
        </script>
    </body>
</html>
