<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use App\Models\CandidatoEm;
use App\Models\CandidatoNovoEdital;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    //Protocolo Pré-Cadastro Online
    public function protocolo(Request $request)
    {
        if (! session()->has('CANDIDATOID') )
            return redirect()->route('estagios')->with('error','Você não está logado no Portal.');

        $id_candidato = session()->get('CANDIDATOID');
        $candidato = Candidato::find($id_candidato);

        $pdf = PDF::loadView('estagios.pdf.protocolo', [
            'candidato' => $candidato,
        ]);
        $pdf->getDomPDF()->set_option("enable_php", true);
        $pdf->setPaper('a4');
        $pdf->setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);

        return $pdf->stream('protocolo.pdf');
    }

    public function protocoloEM(Request $request)
    {
        if (! session()->has('CANDIDATOID') )
            return redirect()->route('estagios')->with('error','Você não está logado no Portal.');

        $id_candidato = session()->get('CANDIDATOID');
        $candidato = CandidatoEm::find($id_candidato);

        $pdf = PDF::loadView('estagios.pdf.protocoloem', [
            'candidato' => $candidato,
        ]);
        $pdf->getDomPDF()->set_option("enable_php", true);
        $pdf->setPaper('a4');
        $pdf->setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);

        return $pdf->stream('protocolo.pdf');
    }

    public function protocoloNovoEdital(Request $request)
    {
        if (! session()->has('CANDIDATO_NOVO_EDITAL_ID') )
            return redirect()->route('estagios')->with('error','Você não está logado no Portal.');

        $id_candidato = session()->get('CANDIDATO_NOVO_EDITAL_ID');
        $candidato = CandidatoNovoEdital::find($id_candidato);

        $pdf = PDF::loadView('estagios.pdf.protocolo-novo-edital', [
            'candidato' => $candidato,
        ]);
        $pdf->getDomPDF()->set_option("enable_php", true);
        $pdf->setPaper('a4');
        $pdf->setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);

        return $pdf->stream('protocolo-novo-edital.pdf');
    }
}
