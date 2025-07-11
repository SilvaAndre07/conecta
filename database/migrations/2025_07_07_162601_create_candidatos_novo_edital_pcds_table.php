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
        Schema::create('candidatos_novo_edital_pcds', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_candidato')->unsigned();
            $table->foreign('id_candidato')->references('id')->on('candidatos_novo_edital')->onDelete('cascade');
            $table->bigInteger('id_deficiencia')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidatos_novo_edital_pcds');
    }
};
