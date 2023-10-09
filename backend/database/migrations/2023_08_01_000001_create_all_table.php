<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        /**adicionais**/
        if (!Schema::hasTable('adicionais')) {
            Schema::create('adicionais', function (Blueprint $table) {

                //ESTRUTURA TABELA
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_general_ci';

                //COLUNAS
                $table->id();
                $table->integer('carga_horaria');
                $table->string('instituicao', 45);
                $table->string('titulo_eleitor', 45);
                $table->date('primeiro_emprego');
                $table->string('status', 10);
                $table->unsignedBigInteger('residente_id');
                $table->unsignedBigInteger('cor_id');
                $table->unsignedBigInteger('escolaridade_id');
                $table->unsignedBigInteger('grupo_sanguinio_id');
                $table->timestamp('criado');
                $table->timestamp('atualizado');
            });
        }

        /**cor**/
        if (!Schema::hasTable('cor')) {
            Schema::create('cor', function (Blueprint $table) {
                //ESTRUTURA TABELA
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_general_ci';

                //COLUNAS
                $table->id();
                $table->string('tipo');
            });
        }

        /**banco**/
        if (!Schema::hasTable('banco')) {
            Schema::create('banco', function (Blueprint $table) {
                //ESTRUTURA TABELA
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_general_ci';

                //COLUNAS
                $table->id();
                $table->string('nome', 45);
            });
        }

        /**classificacao**/
        if (!Schema::hasTable('classificacao')) {
            Schema::create('classificacao', function (Blueprint $table) {
                //ESTRUTURA TABELA
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_general_ci';

                //COLUNAS
                $table->id();
                $table->string('incricao', 45);
                $table->string('classificacao', 45);
                $table->string('nota', 5);
                $table->unsignedBigInteger('lote_id');
            });
        }

        /**conselho**/
        if (!Schema::hasTable('conselho')) {
            Schema::create('conselho', function (Blueprint $table) {
                //ESTRUTURA TABELA
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_general_ci';

                //COLUNAS
                $table->id();
                $table->string('tipo', 45);
            });
        }

        /**contrato**/
        if (!Schema::hasTable('contrato')) {
            Schema::create('contrato', function (Blueprint $table) {
                //ESTRUTURA TABELA
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_general_ci';

                //COLUNAS
                $table->id();
                $table->string('tipo', 45);
                $table->dateTime('data_assinatura');
                $table->timestamp('criado');
                $table->timestamp('atualizado');
            });
        }

        /**cor**/
        if (!Schema::hasTable('cor')) {
            Schema::create('cor', function (Blueprint $table) {
                //ESTRUTURA TABELA
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_general_ci';

                //COLUNAS
                $table->id();
                $table->string('tipo', 45);
            });
        }

        /**endereco**/
        if (!Schema::hasTable('endereco')) {
            Schema::create('endereco', function (Blueprint $table) {
                //ESTRUTURA TABELA
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_general_ci';

                //COLUNAS
                $table->id();
                $table->string('cep', 10);
                $table->string('logradouro', 100);
                $table->integer('numero');
                $table->string('complemento', 100);
                $table->string('bairro', 45);
                $table->string('cidade', 45);
                $table->unsignedBigInteger('estado_id');
                $table->unsignedBigInteger('residente_id');
                $table->unsignedBigInteger('tipo_endereco_id');
                $table->unsignedBigInteger('status_id');
                $table->timestamp('criado');
                $table->timestamp('atualizado');
            });
        }

        /**escolaridade**/
        if (!Schema::hasTable('escolaridade')) {
            Schema::create('escolaridade', function (Blueprint $table) {
                //ESTRUTURA TABELA
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_general_ci';

                //COLUNAS
                $table->id();
                $table->string('tipo', 45);
            });
        }

        /**especialidade**/
        if (!Schema::hasTable('especialidade')) {
            Schema::create('especialidade', function (Blueprint $table) {
                //ESTRUTURA TABELA
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_general_ci';

                //COLUNAS
                $table->id();
                $table->string('tipo', 45);
            });
        }

        /**estado civil**/
        if (!Schema::hasTable('estado_civil')) {
            Schema::create('estado_civil', function (Blueprint $table) {
                //ESTRUTURA TABELA
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_general_ci';

                //COLUNAS
                $table->id();
                $table->string('tipo', 45);
            });
        }

        /**estrangeiro**/
        if (!Schema::hasTable('estrangeiro')) {
            Schema::create('estrangeiro', function (Blueprint $table) {
                //ESTRUTURA TABELA
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_general_ci';

                //COLUNAS
                $table->id();
                $table->string('rne', 45);
                $table->dateTime('nacionalidade_id');
                $table->unsignedBigInteger('estado_civil_id');
                $table->unsignedBigInteger('residente_id');
                $table->unsignedBigInteger('status_id');
                $table->timestamp('criado');
                $table->timestamp('atualizado');
            });
        }

        /**nacoes**/
        if (!Schema::hasTable('nacoes')) {
            Schema::create('nacoes', function (Blueprint $table) {
                //ESTRUTURA TABELA
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_general_ci';

                //COLUNAS
                $table->id();
                $table->string('nome');
            });
        }

        /**financeiro**/
        if (!Schema::hasTable('financeiro')) {
            Schema::create('financeiro', function (Blueprint $table) {
                //ESTRUTURA TABELA
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_general_ci';

                //COLUNAS
                $table->id();
                $table->integer('agencia');
                $table->integer('conta');
                $table->unsignedBigInteger('tipo_conta_id');
                $table->unsignedBigInteger('banco_id');
                $table->unsignedBigInteger('residente_id');
                $table->unsignedBigInteger('status_id');
                $table->timestamp('criado');
                $table->timestamp('atualizado');
            });
        }

        /**financeiro**/
        if (!Schema::hasTable('tipo_conta')) {
            Schema::create('tipo_conta', function (Blueprint $table) {
                //ESTRUTURA TABELA
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_general_ci';

                //COLUNAS
                $table->id();
                $table->string('tipo');
            });
        }

        /**grupo sanguinio**/
        if (!Schema::hasTable('grupo_sanguinio')) {
            Schema::create('grupo_sanguinio', function (Blueprint $table) {
                //ESTRUTURA TABELA
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_general_ci';

                //COLUNAS
                $table->id();
                $table->string('tipo', 45);
            });
        }

        /**users**/
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                //ESTRUTURA TABELA
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_general_ci';

                //COLUNAS
                $table->id();
                $table->string('email', 255);
                $table->string('senha', 255);
                $table->unsignedBigInteger('status_id');
                $table->timestamp('criado');
                $table->timestamp('atualizado');
            });
        }

        /**logs**/
        if (!Schema::hasTable('logs')) {
            Schema::create('logs', function (Blueprint $table) {
                //ESTRUTURA TABELA
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_general_ci';

                //COLUNAS
                $table->id();
                $table->unsignedBigInteger('user_id');
                $table->string('acao', 50);
                $table->string('tabela', 255);
                $table->bigInteger('tabela_id');
                $table->json('request');
                $table->json('response');
                $table->timestamp('criado');
            });
        }

        /**lote**/
        if (!Schema::hasTable('lote')) {
            Schema::create('lote', function (Blueprint $table) {
                //ESTRUTURA TABELA
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_general_ci';

                //COLUNAS
                $table->id();
                $table->string('tipo', 45);
                $table->unsignedBigInteger('status_id');
                $table->timestamp('criado');
                $table->timestamp('atualizado');
            });
        }

        /**nacionalidade**/
        if (!Schema::hasTable('nacionalidade')) {
            Schema::create('nacionalidade', function (Blueprint $table) {
                //ESTRUTURA TABELA
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_general_ci';

                //COLUNAS
                $table->id();
                $table->string('tipo', 45);
            });
        }

        /**registro**/
        if (!Schema::hasTable('registro')) {
            Schema::create('registro', function (Blueprint $table) {
                //ESTRUTURA TABELA
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_general_ci';

                //COLUNAS
                $table->id();
                $table->string('protocolo', 45);
                $table->string('numero_registro', 45);
                $table->integer('lote');
                $table->unsignedBigInteger('especialidade_id');
                $table->unsignedBigInteger('conselho_id');
                $table->unsignedBigInteger('unidade_id');
                $table->unsignedBigInteger('status_id');
                $table->timestamp('criado');
                $table->timestamp('atualizado');
            });
        }

        /**residentes**/
        if (!Schema::hasTable('residentes')) {
            Schema::create('residentes', function (Blueprint $table) {
                //ESTRUTURA TABELA
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_general_ci';

                //COLUNAS
                $table->id();
                $table->string('nome', 100);
                $table->string('cpf', 15);
                $table->string('rg', 15);
                $table->string('orgao_emissor', 10);
                $table->dateTime('data_emissao');
                $table->string('municipio_nascimento', 45);
                $table->boolean('possui_filhos');
                $table->integer('quantidade_filhos');
                $table->string('nome_mae', 45);
                $table->string('nome_pai', 45);
                $table->string('email', 45);
                $table->dateTime('data_nascimento');
                $table->unsignedBigInteger('estado_civil_id');
                $table->unsignedBigInteger('registro_id');
                $table->unsignedBigInteger('classificacao_id');
                $table->unsignedBigInteger('contrato_id');
                $table->unsignedBigInteger('financeiro_id');
                $table->unsignedBigInteger('nacionalidade_id');
                $table->unsignedBigInteger('uf_nascimento_id');
                $table->unsignedBigInteger('sexo_id');
                $table->unsignedBigInteger('status_id');
                $table->timestamp('criado');
                $table->timestamp('atualizado');
            });
        }

        /** contatos **/
        if (!Schema::hasTable('contatos')) {
            Schema::create('contatos', function (Blueprint $table) {
                //ESTRUTURA TABELA
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_general_ci';

                //COLUNAS
                $table->id();
                $table->unsignedBigInteger('residente_id');
                $table->integer('telefone');
                $table->unsignedBigInteger('tipo_contato_id');
                $table->timestamp('criado');
                $table->timestamp('atualizado');
            });
        }

        /** tipos de contatos **/
        if (!Schema::hasTable('tipo_contatos')) {
            Schema::create('tipo_contatos', function (Blueprint $table) {
                //ESTRUTURA TABELA
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_general_ci';

                //COLUNAS
                $table->id();
                $table->string('tipo', 50);
            });
        }

        /** estados **/
        if (!Schema::hasTable('estados')) {
            Schema::create('estados', function (Blueprint $table) {
                //ESTRUTURA TABELA
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_general_ci';

                //COLUNAS
                $table->id();
                $table->string('nome', 100);
                $table->char('uf', 2);
            });
        }

        /**sexo**/
        if (!Schema::hasTable('sexo')) {
            Schema::create('sexo', function (Blueprint $table) {
                //ESTRUTURA TABELA
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_general_ci';

                //COLUNAS
                $table->id();
                $table->string('tipo', 45);
            });
        }

        /**status**/
        if (!Schema::hasTable('status')) {
            Schema::create('status', function (Blueprint $table) {
                //ESTRUTURA TABELA
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_general_ci';

                //COLUNAS
                $table->id();
                $table->string('status', 10);
            });
        }

        /**tipo endereco**/
        if (!Schema::hasTable('=')) {
            Schema::create('tipo_endereco', function (Blueprint $table) {
                //ESTRUTURA TABELA
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_general_ci';

                //COLUNAS
                $table->id();
                $table->string('tipo', 45);
            });
        }


        /**unidade**/
        if (!Schema::hasTable('unidade')) {
            Schema::create('unidade', function (Blueprint $table) {
                //ESTRUTURA TABELA
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_general_ci';

                //COLUNAS
                $table->id();
                $table->string('tipo', 45);
                $table->timestamp('criado');
                $table->timestamp('atualizado');
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('adicionais');
        Schema::dropIfExists('cor');
        Schema::dropIfExists('banco');
        Schema::dropIfExists('classificacao');
        Schema::dropIfExists('conselho');
        Schema::dropIfExists('contrato');
        Schema::dropIfExists('cor');
        Schema::dropIfExists('endereco');
        Schema::dropIfExists('escolaridade');
        Schema::dropIfExists('especialidade');
        Schema::dropIfExists('estado_civil');
        Schema::dropIfExists('estrangeiro');
        Schema::dropIfExists('financeiro');
        Schema::dropIfExists('tipo_conta');
        Schema::dropIfExists('grupo_sanguinio');
        Schema::dropIfExists('users');
        Schema::dropIfExists('logs');
        Schema::dropIfExists('lote');
        Schema::dropIfExists('nacionalidade');
        Schema::dropIfExists('registro');
        Schema::dropIfExists('residentes');
        Schema::dropIfExists('contatos');
        Schema::dropIfExists('tipo_contatos');
        Schema::dropIfExists('estados');
        Schema::dropIfExists('sexo');
        Schema::dropIfExists('status');
        Schema::dropIfExists('tipo_endereco');
        Schema::dropIfExists('unidade');
        Schema::dropIfExists('nacoes');
    }
};
