<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta property="creator.productor" content="Igor Oliveira">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Programa de Estágio - Novo Edital</title>

    <!-- Páginas CSS -->
    <link href="{{ asset('scripts/bootstrap/dist/5.3.1/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        .page_break { page-break-before: always; }

    </style>
</head>

<body>

    <table class="table">
        <tr style="height: 200px; vertical-align:middle;">
            <td><img src="{{ asset('img/logo_brasao.png') }}" alt="" height="120"></td>
        </tr>

        <tr>
            <td colspan="2"><h1 style="text-align: center; margin:30px 0;">Inscrição no Programa Municipal de Estágio - Edital Nº 002/2025</h1></td>
        </tr>

        <tr>
            <td colspan="2">
                <div style="border: solid 2px #333; width: 100%; height: 170px; border-radius: 30px; padding: 20px 0;">
                    <p style="text-align: center;">Parabéns! Seu cadastro foi concluído com sucesso.</p>
                    <h6 style="text-align: center;"><strong>SEU NÚMERO DE IDENTIFICAÇÃO É:</strong></h6>
                    <h1 style="text-align: center;" class="display-6">{{ str_pad($candidato->id, 5, '0', STR_PAD_LEFT);}}</h1>

                </div>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <ul style="list-style: none; list-style-position: outside; margin-top:30px;">
                    <li style="padding-bottom: 10px;">Nome do Candidato:</li>
                    <li><strong>{{$candidato->nome}}</strong></li>
                </ul>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <ul style="list-style: none; list-style-position: outside; margin-top:30px;">
                    <li style="padding-bottom: 10px;">CPF:</li>
                    <li><strong>{{$candidato->cpf}}</strong></li>
                </ul>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <ul style="list-style: none; list-style-position: outside; margin-top:30px;">
                    <li style="padding-bottom: 10px;">Tipo de Inscrição:</li>
                    <li><strong>ENSINO SUPERIOR - NOVO EDITAL</strong></li>
                </ul>
            </td>
        </tr>

        <tr><td colspan="2" style="border-bottom: solid 2px #CCC; width: 100%;"></td></tr>

        <tr>
            <td>
                <ul style="list-style: none; list-style-position: outside; margin-top:30px;">
                    <li style="padding-bottom: 10px;">Data do Cadastro:</li>
                    <li><strong>{{date('d/m/Y H:i:s', strtotime($candidato->created_at)) }}</strong></li>
                </ul>
            </td>
        </tr>

        <tr><td colspan="2" style="border-bottom: solid 2px #CCC; width: 100%;"></td></tr>


        <tr><td colspan="2" style="border-bottom: solid 2px #CCC; width: 100%;"></td></tr>

        <tr>
            <td colspan="2">
                <p style="margin-top: 10px; text-align: justify; font-size: 18px; line-height: 30px; font-weight: bold;">
                    ATENÇÃO: Acompanhe o regulamento deste Processo Seletivo no Edital disponível no https://conecta.assai.pr.gov.br/estagios.
                </p>
                <p style="margin-top: 10px; text-align: justify; font-size: 18px; line-height: 30px; font-weight: bold;">
                    ATENÇÃO: Leia o Edital Nº 002/2025 para preparar a documentação exigida pelo Processo Seletivo. Consulte as datas no novo edital.
                </p>
            </td>
        </tr>

    </table>

    <script type="text/php">
        if (isset($pdf)) {
            $text = "Página {PAGE_NUM} / {PAGE_COUNT}";
            $size = 10;
            $font = $fontMetrics->getFont("Verdana");
            $width = $fontMetrics->get_text_width($text, $font, $size) / 2;
            $x = ($pdf->get_width() - $width) / 2;
            $y = $pdf->get_height() - 35;
            $pdf->page_text($x, $y, $text, $font, $size);
        }
    </script>

</body>
</html>
