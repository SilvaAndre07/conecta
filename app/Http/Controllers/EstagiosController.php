<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use App\Models\CandidatoEm;
use App\Models\CandidatoNovoEdital;
use App\Models\CandidatoNovoEditalPcd;
use App\Models\CandidatosPcd;
use App\Models\CandidatosPcdem;
use App\Models\CidadaosPcd;
use App\Models\TiposDeficiencia;
use App\Models\TiposEstado;
use App\Models\TiposLogradouro;
use App\Models\TiposNacionalidade;
use App\Models\TiposRaca;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EstagiosController extends Controller
{
    public function inicioEstagio()
    {
        return view('inicio');
    }

    public function formulario()
    {
        $uf = TiposEstado::orderBy('uf','asc')->get();
        $pcd = TiposDeficiencia::orderBy('nome','asc')->get();
        $logradouros = TiposLogradouro::orderBy('nome','asc')->get();
        $racas = TiposRaca::orderBy('nome','asc')->get();
        $nacionalidades = TiposNacionalidade::orderBy('sigla','asc')->get();

        return view('estagios.formulario', [
            'tipouf' => $uf,
            'tipopcd' => $pcd,
            'tipologradouro' => $logradouros,
            'tiporaca' => $racas,
            'tiponacionalidade' => $nacionalidades,
        ]);
    }

     //GRAVAÇÃO DO PRÉ-CADASTRO NO BANCO DE DADOS
     public function create(Request $request)
     {
         //Verifica se o CheckBox do WhatsApp está marcado
         $wa = $request->has('txtCelularWA') ? 'S' : 'N';

        $candidato = new Candidato();
            $candidato->sexo = $request->input('txtSexo');
            $candidato->raca = $request->input('txtRaca');
            $candidato->cpf = $request->input('txtCPF');
            $candidato->nome = Str::upper($request->input('txtNome'));
            $candidato->nomeSocial = Str::upper($request->input('txtNomeSocial'));
            $candidato->dataNascimento = substr($request->input('txtNascimento'),6,4).'-'.substr($request->input('txtNascimento'),3,2).'-'.substr($request->input('txtNascimento'),0,2);
            $candidato->nacionalidade = $request->input('txtNacionalidade');
            $candidato->naturalidade = Str::upper($request->input('txtNaturalidade'));
            $candidato->naturalidade_uf = $request->input('txtNaturalidadeUF');
            $candidato->email = Str::lower($request->input('txtEmail'));
            $candidato->celular = $request->input('txtCelular');
            $candidato->celular_wa = $wa;
            $candidato->telefone = $request->input('txtTelefone');
            $candidato->recado_nome = Str::upper($request->input('txtNomeRecado'));
            $candidato->recado_telefone = $request->input('txtTelRecado');
            $candidato->rf = $request->input('txtRF');
            $candidato->rf_nome = Str::upper($request->input('txtRFNome'));
            $candidato->rf_cpf = $request->input('txtRFCPF');
            $candidato->rg = $request->input('txtRG');
            $candidato->rg_orgao = Str::upper($request->input('txtRGOrgao'));
            $candidato->rg_uf = $request->input('txtRGUF');
            $candidato->cnh = $request->input('txtCNH');
            $candidato->cnh_cat = $request->input('txtCNHSerie');
            $candidato->cnh_uf = $request->input('txtCNHUF');
            $candidato->is_pcd = $request->input('txtPCD');

                 $candidato->cep = $request->input('txtCEP');
                 $candidato->id_logradouros = $request->input('txtLogradouroTipo');
                 $candidato->logradouro = Str::upper($request->input('txtLogradouro'));
                 $candidato->logradouro_numero = Str::upper($request->input('txtLogradouroNum'));
                 $candidato->logradouro_complemento = Str::upper($request->input('txtLogradouroComp'));
                 $candidato->logradouro_bairro = Str::upper($request->input('txtBairro'));
                 $candidato->logradouro_referencia = Str::upper($request->input('txtReferencia'));
                 $candidato->logradouro_uf = Str::upper($request->input('txtResUF'));
                 $candidato->logradouro_cidade = Str::upper($request->input('txtResCidade'));
                 $candidato->logradouro_zona = $request->input('txtZona');

            $candidato->curso_instituicao = Str::upper($request->input('txtCursoInst'));
            $candidato->curso_nome = Str::upper($request->input('txtCurso'));
            $candidato->curso_semestres_qtd = $request->input('txtCursoSemestres');
            $candidato->curso_semestre = $request->input('txtCursando');
            $candidato->curso_turno = $request->input('txtTurno');
            $candidato->vaga_desejada = $request->input('txtVaga');

        $candidato->save();


        $checkpcd = $request->has('txtPCDQ') ? 'S' : 'N';
        if ( $checkpcd === 'S' ) {
            foreach ( $request->get('txtPCDQ') as $value ) {
                $pcd = new CandidatosPcd();
                    $pcd->id_candidato = $candidato->id;
                    $pcd->id_deficiencia = $value;
                $pcd->save();
            }
        }

        //Registra informações do cidadão gravado na Sessão para Emissão do Comprovante
        session()->put('CANDIDATOID', $candidato->id);

        return redirect()->route('estagios.protocolo');

     }

     public function protocolo()
     {
         if (! session()->has('CANDIDATOID') )
             return redirect()->route('estagios')->with('error','Você não está autorizado.');


         $id_candidato = session()->get('CANDIDATOID');
         //Passar parâmetro para o Controller Pdf por Cache

         $candidato = Candidato::find($id_candidato);
         return view('estagios.protocolo',[
             'candidato' => $candidato,
         ]);
     }


     public function formularioEM()
     {
         $uf = TiposEstado::orderBy('uf','asc')->get();
         $pcd = TiposDeficiencia::orderBy('nome','asc')->get();
         $logradouros = TiposLogradouro::orderBy('nome','asc')->get();
         $racas = TiposRaca::orderBy('nome','asc')->get();
         $nacionalidades = TiposNacionalidade::orderBy('sigla','asc')->get();

         return view('estagios.formularioem', [
             'tipouf' => $uf,
             'tipopcd' => $pcd,
             'tipologradouro' => $logradouros,
             'tiporaca' => $racas,
             'tiponacionalidade' => $nacionalidades,
         ]);
     }

      //GRAVAÇÃO DO PRÉ-CADASTRO NO BANCO DE DADOS
      public function createEM(Request $request)
      {
          //Verifica se o CheckBox do WhatsApp está marcado
          $wa = $request->has('txtCelularWA') ? 'S' : 'N';

         $candidato = new CandidatoEm();
             $candidato->sexo = $request->input('txtSexo');
             $candidato->raca = $request->input('txtRaca');
             $candidato->cpf = $request->input('txtCPF');
             $candidato->nome = Str::upper($request->input('txtNome'));
             $candidato->nomeSocial = Str::upper($request->input('txtNomeSocial'));
             $candidato->dataNascimento = substr($request->input('txtNascimento'),6,4).'-'.substr($request->input('txtNascimento'),3,2).'-'.substr($request->input('txtNascimento'),0,2);
             $candidato->nacionalidade = $request->input('txtNacionalidade');
             $candidato->naturalidade = Str::upper($request->input('txtNaturalidade'));
             $candidato->naturalidade_uf = $request->input('txtNaturalidadeUF');
             $candidato->email = Str::lower($request->input('txtEmail'));
             $candidato->celular = $request->input('txtCelular');
             $candidato->celular_wa = $wa;
             $candidato->telefone = $request->input('txtTelefone');
             $candidato->recado_nome = Str::upper($request->input('txtNomeRecado'));
             $candidato->recado_telefone = $request->input('txtTelRecado');
             $candidato->rf = $request->input('txtRF');
             $candidato->rf_nome = Str::upper($request->input('txtRFNome'));
             $candidato->rf_cpf = $request->input('txtRFCPF');
             $candidato->rg = $request->input('txtRG');
             $candidato->rg_orgao = Str::upper($request->input('txtRGOrgao'));
             $candidato->rg_uf = $request->input('txtRGUF');
             $candidato->is_pcd = $request->input('txtPCD');

                  $candidato->cep = $request->input('txtCEP');
                  $candidato->id_logradouros = $request->input('txtLogradouroTipo');
                  $candidato->logradouro = Str::upper($request->input('txtLogradouro'));
                  $candidato->logradouro_numero = Str::upper($request->input('txtLogradouroNum'));
                  $candidato->logradouro_complemento = Str::upper($request->input('txtLogradouroComp'));
                  $candidato->logradouro_bairro = Str::upper($request->input('txtBairro'));
                  $candidato->logradouro_referencia = Str::upper($request->input('txtReferencia'));
                  $candidato->logradouro_uf = Str::upper($request->input('txtResUF'));
                  $candidato->logradouro_cidade = Str::upper($request->input('txtResCidade'));
                  $candidato->logradouro_zona = $request->input('txtZona');

             $candidato->curso_instituicao = $request->input('txtCursoInst');
             $candidato->curso_serie = $request->input('txtCursoSerie');
             $candidato->curso_turno = $request->input('txtTurno');
             $candidato->vaga_desejada = $request->input('txtVaga');

         $candidato->save();


         $checkpcd = $request->has('txtPCDQ') ? 'S' : 'N';
         if ( $checkpcd === 'S' ) {
             foreach ( $request->get('txtPCDQ') as $value ) {
                 $pcd = new CandidatosPcdem();
                     $pcd->id_candidato = $candidato->id;
                     $pcd->id_deficiencia = $value;
                 $pcd->save();
             }
         }

         //Registra informações do cidadão gravado na Sessão para Emissão do Comprovante
         session()->put('CANDIDATOID', $candidato->id);

         return redirect()->route('estagios.protocoloEM');

    }


    public function protocoloEM()
    {
        if (! session()->has('CANDIDATOID') )
            return redirect()->route('estagios')->with('error','Você não está autorizado.');


        $id_candidato = session()->get('CANDIDATOID');
        //Passar parâmetro para o Controller Pdf por Cache

        $candidato = CandidatoEm::find($id_candidato);
        return view('estagios.protocoloem',[
            'candidato' => $candidato,
        ]);
    }

    public function formularioNovoEdital()
    {
        $uf = TiposEstado::orderBy('uf','asc')->get();
        $pcd = TiposDeficiencia::orderBy('nome','asc')->get();
        $logradouros = TiposLogradouro::orderBy('nome','asc')->get();
        $racas = TiposRaca::orderBy('nome','asc')->get();
        $nacionalidades = TiposNacionalidade::orderBy('sigla','asc')->get();

        return view('estagios.formulario-novo-edital', [
            'tipouf' => $uf,
            'tipopcd' => $pcd,
            'tipologradouro' => $logradouros,
            'tiporaca' => $racas,
            'tiponacionalidade' => $nacionalidades,
        ]);
    }

    //GRAVAÇÃO DO PRÉ-CADASTRO DO NOVO EDITAL NO BANCO DE DADOS
    public function createNovoEdital(Request $request)
    {
        //Verifica se o CheckBox do WhatsApp está marcado
        $wa = $request->has('txtCelularWA') ? 'S' : 'N';

        $candidato = new CandidatoNovoEdital();
            $candidato->sexo = $request->input('txtSexo');
            $candidato->raca = $request->input('txtRaca');
            $candidato->cpf = $request->input('txtCPF');
            $candidato->nome = Str::upper($request->input('txtNome'));
            $candidato->nomeSocial = Str::upper($request->input('txtNomeSocial'));
            $candidato->dataNascimento = substr($request->input('txtNascimento'),6,4).'-'.substr($request->input('txtNascimento'),3,2).'-'.substr($request->input('txtNascimento'),0,2);
            $candidato->nacionalidade = $request->input('txtNacionalidade');
            $candidato->naturalidade = Str::upper($request->input('txtNaturalidade'));
            $candidato->naturalidade_uf = $request->input('txtNaturalidadeUF');
            $candidato->email = Str::lower($request->input('txtEmail'));
            $candidato->celular = $request->input('txtCelular');
            $candidato->celular_wa = $wa;
            $candidato->telefone = $request->input('txtTelefone');
            $candidato->recado_nome = Str::upper($request->input('txtNomeRecado'));
            $candidato->recado_telefone = $request->input('txtTelRecado');
            $candidato->rf = $request->input('txtRF');
            $candidato->rf_nome = Str::upper($request->input('txtRFNome'));
            $candidato->rf_cpf = $request->input('txtRFCPF');
            $candidato->rg = $request->input('txtRG');
            $candidato->rg_orgao = Str::upper($request->input('txtRGOrgao'));
            $candidato->rg_uf = $request->input('txtRGUF');
            $candidato->cnh = $request->input('txtCNH');
            $candidato->cnh_cat = $request->input('txtCNHSerie');
            $candidato->cnh_uf = $request->input('txtCNHUF');
            $candidato->is_pcd = $request->input('txtPCD');

            $candidato->cep = $request->input('txtCEP');
            $candidato->id_logradouros = $request->input('txtLogradouroTipo');
            $candidato->logradouro = Str::upper($request->input('txtLogradouro'));
            $candidato->logradouro_numero = Str::upper($request->input('txtLogradouroNum'));
            $candidato->logradouro_complemento = Str::upper($request->input('txtLogradouroComp'));
            $candidato->logradouro_bairro = Str::upper($request->input('txtBairro'));
            $candidato->logradouro_referencia = Str::upper($request->input('txtReferencia'));
            $candidato->logradouro_uf = Str::upper($request->input('txtResUF'));
            $candidato->logradouro_cidade = Str::upper($request->input('txtResCidade'));
            $candidato->logradouro_zona = $request->input('txtZona');

            $candidato->curso_instituicao = Str::upper($request->input('txtCursoInst'));
            $candidato->curso_nome = Str::upper($request->input('txtCurso'));
            $candidato->curso_semestres_qtd = $request->input('txtCursoSemestres');
            $candidato->curso_semestre = $request->input('txtCursando');
            $candidato->curso_turno = $request->input('txtTurno');
            $candidato->vaga_desejada = $request->input('txtVaga');

        $candidato->save();

        $checkpcd = $request->has('txtPCDQ') ? 'S' : 'N';
        if ( $checkpcd === 'S' ) {
            foreach ( $request->get('txtPCDQ') as $value ) {
                $pcd = new CandidatoNovoEditalPcd();
                    $pcd->id_candidato = $candidato->id;
                    $pcd->id_deficiencia = $value;
                $pcd->save();
            }
        }

        //Registra informações do candidato gravado na Sessão para Emissão do Comprovante
        session()->put('CANDIDATO_NOVO_EDITAL_ID', $candidato->id);

        return redirect()->route('estagios.protocoloNovoEdital');
    }

    public function protocoloNovoEdital()
    {
        if (! session()->has('CANDIDATO_NOVO_EDITAL_ID') )
            return redirect()->route('estagios')->with('error','Você não está autorizado.');

        $id_candidato = session()->get('CANDIDATO_NOVO_EDITAL_ID');

        $candidato = CandidatoNovoEdital::find($id_candidato);
        return view('estagios.protocolo-novo-edital',[
            'candidato' => $candidato,
        ]);
    }

    public function finish()
    {
        if (! session()->has('CANDIDATOID') )
            return redirect()->route('estagios')->with('error','Você não está autorizado.');

        session()->forget('CANDIDATOID');
        return redirect()->route('estagios');
    }

    public function finishNovoEdital()
    {
        if (! session()->has('CANDIDATO_NOVO_EDITAL_ID') )
            return redirect()->route('estagios')->with('error','Você não está autorizado.');

        session()->forget('CANDIDATO_NOVO_EDITAL_ID');
        return redirect()->route('estagios');
    }
}
