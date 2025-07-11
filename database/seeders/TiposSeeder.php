<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estados = [
            ['nome' => 'Rondônia', 'uf' => 'RO'],
            ['nome' => 'Acre', 'uf' => 'AC'],
            ['nome' => 'Amazonas', 'uf' => 'AM'],
            ['nome' => 'Roraima', 'uf' => 'RR'],
            ['nome' => 'Pará', 'uf' => 'PA'],
            ['nome' => 'Amapá', 'uf' => 'AP'],
            ['nome' => 'Tocantins', 'uf' => 'TO'],
            ['nome' => 'Maranhão', 'uf' => 'MA'],
            ['nome' => 'Piauí', 'uf' => 'PI'],
            ['nome' => 'Ceará', 'uf' => 'CE'],
            ['nome' => 'Rio Grande do Norte', 'uf' => 'RN'],
            ['nome' => 'Paraíba', 'uf' => 'PB'],
            ['nome' => 'Pernambuco', 'uf' => 'PE'],
            ['nome' => 'Alagoas', 'uf' => 'AL'],
            ['nome' => 'Sergipe', 'uf' => 'SE'],
            ['nome' => 'Bahia', 'uf' => 'BA'],
            ['nome' => 'Minas Gerais', 'uf' => 'MG'],
            ['nome' => 'Espírito Santo', 'uf' => 'ES'],
            ['nome' => 'Rio de Janeiro', 'uf' => 'RJ'],
            ['nome' => 'São Paulo', 'uf' => 'SP'],
            ['nome' => 'Paraná', 'uf' => 'PR'],
            ['nome' => 'Santa Catarina', 'uf' => 'SC'],
            ['nome' => 'Mato Grosso do Sul', 'uf' => 'MS'],
            ['nome' => 'Mato Grosso', 'uf' => 'MT'],
            ['nome' => 'Goiás', 'uf' => 'GO'],
            ['nome' => 'Distrito Federal', 'uf' => 'DF'],
        ];
        DB::table('tipos_estados')->insert($estados);

        $logradouros = [
            ['nome' => 'ALAMEDA'],
            ['nome' => 'AVENIDA'],
            ['nome' => 'CHÁCARA'],
            ['nome' => 'COLÔNIA'],
            ['nome' => 'CONDOMÍNIO'],
            ['nome' => 'CONJUNTO'],
            ['nome' => 'ESTRADA'],
            ['nome' => 'JARDIM'],
            ['nome' => 'LADEIRA'],
            ['nome' => 'LARGO'],
            ['nome' => 'LOTEAMENTO'],
            ['nome' => 'PARQUE'],
            ['nome' => 'PASSARELA'],
            ['nome' => 'PRAÇA'],
            ['nome' => 'QUADRA'],
            ['nome' => 'RESIDENCIAL'],
            ['nome' => 'RUA'],
            ['nome' => 'SÍTIO'],
            ['nome' => 'TRAVESSA'],
            ['nome' => 'VIA'],
            ['nome' => 'VIELA'],
            ['nome' => 'VILA'],
        ];
        DB::table('tipos_logradouros')->insert($logradouros);


        $raca = [
            ['nome' => 'Branca'],
            ['nome' => 'Preta'],
            ['nome' => 'Parda'],
            ['nome' => 'Amarela'],
            ['nome' => 'Indígena'],
        ];
        DB::table('tipos_racas')->insert($raca);

        $estadocivil = [
            ['nome' => 'Solteiro(a)'],
            ['nome' => 'Casado(a)'],
            ['nome' => 'Em União Estável'],
            ['nome' => 'Separado(a)'],
            ['nome' => 'Divorciado(a)'],
            ['nome' => 'Viúvo(a)'],
        ];
        DB::table('tipos_estadocivil')->insert($estadocivil);

        $pcd = [
            ['nome' => 'Auditiva'],
            ['nome' => 'Visual'],
            ['nome' => 'Intelectual / Cognitiva'],
            ['nome' => 'Física'],
            ['nome' => 'Outra'],
        ];
        DB::table('tipos_deficiencias')->insert($pcd);
    }
}
