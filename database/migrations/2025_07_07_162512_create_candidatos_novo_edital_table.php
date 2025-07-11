<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('candidatos_novo_edital', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('status')->default(1)->unsigned();
            $table->char('sexo',1);
            $table->integer('raca')->unsigned();
            $table->string('cpf')->unique();
            $table->string('nome');
            $table->string('nomeSocial')->nullable();
            $table->date('dataNascimento');
            $table->integer('nacionalidade')->unsigned();
            $table->string('naturalidade');
            $table->char('naturalidade_uf',2);
            $table->string('email', 100)->nullable();
            $table->string('celular', 20)->nullable();
            $table->char('celular_wa',1)->default('N');
            $table->string('telefone', 20)->nullable();
            $table->string('recado_nome', 100)->nullable();
            $table->string('recado_telefone', 20)->nullable();
            $table->char('rf',1);
            $table->string('rf_nome',100);
            $table->string('rf_cpf',14);
            $table->string('rg',20);
            $table->string('rg_orgao',100);
            $table->char('rg_uf', 2);
            $table->string('cnh',20)->nullable();
            $table->string('cnh_cat',50)->nullable();
            $table->char('cnh_uf',2)->nullable();
            $table->char('is_pcd',1)->default('N');

            $table->string('cep');
            $table->bigInteger('id_logradouros')->unsigned();
            $table->text('logradouro');
            $table->string('logradouro_numero',100);
            $table->string('logradouro_complemento')->nullable();
            $table->string('logradouro_bairro');
            $table->text('logradouro_referencia')->nullable();
            $table->string('logradouro_uf');
            $table->string('logradouro_cidade');
            $table->char('logradouro_zona', 1);

            $table->string('curso_instituicao');
            $table->string('curso_nome');
            $table->string('curso_semestres_qtd');
            $table->string('curso_semestre');
            $table->string('curso_turno');

            $table->string('vaga_desejada');

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidatos_novo_edital');
    }
};
