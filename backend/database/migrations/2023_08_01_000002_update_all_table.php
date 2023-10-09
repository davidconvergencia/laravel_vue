<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::table('adicionais', function (Blueprint $table) {
            $table->foreign('residente_id')->references('id')->on('residentes');
            $table->foreign('cor_id')->references('id')->on('cor');
            $table->foreign('escolaridade_id')->references('id')->on('escolaridade');
            $table->foreign('grupo_sanguinio_id')->references('id')->on('grupo_sanguinio');
        });

        Schema::table('classificacao', function (Blueprint $table) {
            $table->foreign('lote_id')->references('id')->on('lote');
        });

        Schema::table('endereco', function (Blueprint $table) {
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->foreign('residente_id')->references('id')->on('residentes');
            $table->foreign('tipo_endereco_id')->references('id')->on('tipo_endereco');
            $table->foreign('status_id')->references('id')->on('status');
        });

        Schema::table('estrangeiro', function (Blueprint $table) {
            $table->foreign('estado_civil_id')->references('id')->on('estado_civil');
            $table->foreign('residente_id')->references('id')->on('residentes');
            $table->foreign('status_id')->references('id')->on('status');
        });

        Schema::table('financeiro', function (Blueprint $table) {
            $table->foreign('tipo_conta_id')->references('id')->on('tipo_conta');
            $table->foreign('banco_id')->references('id')->on('banco');
            $table->foreign('residente_id')->references('id')->on('residentes');
            $table->foreign('status_id')->references('id')->on('status');
        });

        Schema::table('logs', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('lote', function (Blueprint $table) {
            $table->foreign('status_id')->references('id')->on('status');
        });

        Schema::table('residentes', function (Blueprint $table) {
            $table->foreign('estado_civil_id')->references('id')->on('estado_civil');
            $table->foreign('registro_id')->references('id')->on('registro');
            $table->foreign('classificacao_id')->references('id')->on('classificacao');
            $table->foreign('contrato_id')->references('id')->on('contrato');
            $table->foreign('financeiro_id')->references('id')->on('financeiro');
            $table->foreign('nacionalidade_id')->references('id')->on('nacionalidade');
            $table->foreign('uf_nascimento_id')->references('id')->on('estados');
            $table->foreign('sexo_id')->references('id')->on('sexo');
        });

        Schema::table('contatos', function (Blueprint $table) {
            $table->foreign('residente_id')->references('id')->on('residentes');
            $table->foreign('tipo_contato_id')->references('id')->on('tipo_contatos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('adicionais', function (Blueprint $table) {
            $table->dropForeign(['residente_id']);
            $table->dropForeign(['cor_id']);
            $table->dropForeign(['escolaridade_id']);
            $table->dropForeign(['grupo_sanguinio_id']);
        });

        Schema::table('classificacao', function (Blueprint $table) {
            $table->dropForeign(['lote_id']);
        });

        Schema::table('endereco', function (Blueprint $table) {
            $table->dropForeign(['estado_id']);
            $table->dropForeign(['residente_id']);
            $table->dropForeign(['tipo_endereco_id']);
            $table->dropForeign(['status_id']);
        });

        Schema::table('estrangeiro', function (Blueprint $table) {
            $table->dropForeign(['estado_civil_id']);
            $table->dropForeign(['residente_id']);
            $table->dropForeign(['status_id']);
        });

        Schema::table('financeiro', function (Blueprint $table) {
            $table->dropForeign(['tipo_conta_id']);
            $table->dropForeign(['banco_id']);
            $table->dropForeign(['residente_id']);
            $table->dropForeign(['status_id']);
        });

        Schema::table('logs', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::table('lote', function (Blueprint $table) {
            $table->dropForeign(['status_id']);
        });

        Schema::table('residentes', function (Blueprint $table) {
            $table->dropForeign(['estado_civil_id']);
            $table->dropForeign(['registro_id']);
            $table->dropForeign(['classificacao_id']);
            $table->dropForeign(['contrato_id']);
            $table->dropForeign(['financeiro_id']);
            $table->dropForeign(['nacionalidade_id']);
            $table->dropForeign(['uf_nascimento_id']);
            $table->dropForeign(['sexo_id']);
        });

        Schema::table('contatos', function (Blueprint $table) {
            $table->dropForeign(['residente_id']);
            $table->dropForeign(['tipo_contato_id']);
        });
    }
};
