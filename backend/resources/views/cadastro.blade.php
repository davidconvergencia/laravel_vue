@extends('template.base')

@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('titulo_html')
    | Residentes
@endsection

@section('titulo_pagina')
    CADASTRO - RESIDENTES
@endsection

<!-- Main content -->
@section('content')
    <div class="card">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pessoal-tab" data-bs-toggle="tab" data-bs-target="#pessoal" type="button"
                    role="tab" aria-controls="pessoal" aria-selected="true">Pessoal</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="filiacao-tab" data-bs-toggle="tab" data-bs-target="#filiacao" type="button"
                    role="tab" aria-controls="filiacao" aria-selected="false">Filiacão</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="residencia-tab" data-bs-toggle="tab" data-bs-target="#residencia"
                    type="button" role="tab" aria-controls="residencia" aria-selected="false">Residencia</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="financeiro-tab" data-bs-toggle="tab" data-bs-target="#financeiro"
                    type="button" role="tab" aria-controls="financeiro" aria-selected="false">Financeiro</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="adicionais-tab" data-bs-toggle="tab" data-bs-target="#adicionais"
                    type="button" role="tab" aria-controls="adicionais" aria-selected="false">Adicionais</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="estrangeiro-tab" data-bs-toggle="tab" data-bs-target="#estrangeiro"
                    type="button" role="tab" aria-controls="estrangeiro" aria-selected="false">Estrangeiro</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="registro-tab" data-bs-toggle="tab" data-bs-target="#registro" type="button"
                    role="tab" aria-controls="registro" aria-selected="false">Registro</button>
            </li>
        </ul>

        <div class="tab-content">
            <!-- Dados Pessoais -->
            <div class="tab-pane active" id="pessoal" role="tabpanel" aria-labelledby="Pessoal-tab">
                <form method="POST" action="{{ route('cadastro.pessoal') }}">
                    @csrf
                    <div class="row p-3">
                        <div class="container-fluid hidden">
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label class="text-primary" for="nome">Nome</label>
                                    <input type="text" class="form-control" id="nome"  name="nome" placeholder="Nome" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label class="text-primary" for="data_amostra">Nacionalidade</label>
                                    <select class="form-select" aria-label="Default select example" name="nacionalidade">
                                        <option selected disabled></option>
                                        <option value="1">brasileira</option>
                                        <option value="2">estrangeira</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="text-primary" for="cpf">CPF</label>
                                    <input type="text" class="form-control" id="cpf" placeholder="CPF" name="cpf"
                                        required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="text-primary" for="sexo">Sexo</label>
                                    <select class="form-select" aria-label="Default select example" name="sexo">
                                        <option selected disabled></option>
                                        <option value="1">Masculino</option>
                                        <option value="2">Feminino</option>
                                        <option value="3">Helicóptero de Combate</option>
                                    </select>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label class="text-primary" for="rg">RG</label>
                                    <input type="text" class="form-control" id="rg" placeholder="RG" required name="rg">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="text-primary" for="orgaoEmissor">Orgão Emissor</label>
                                    <input type="text" class="form-control" id="orgaoEmissor" placeholder="RG"
                                        required name="orgaoEmissor">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="text-primary" for="dataEmissao">Data de Emissão</label>
                                    <input type="date" class="form-control data-amostra" id="dataEmissao"
                                        name="dataEmissao" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label class="text-primary" for="municipioNascimento">Municipio de Nascimento</label>
                                    <input type="text" class="form-control" id="municipioNascimento" name="municipioNascimento" placeholder="Municipio de Nascimento" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="text-primary" for="uf">UF</label>
                                    <input type="text" class="form-control" id="uf" placeholder="UF" name="ufNascimento" required >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label class="text-primary" for="Estado Civil">Estado Civil</label>
                                    <select class="form-select" aria-label="Default select example" name="estadoCivil">
                                        <option selected disabled></option>
                                        <option value="1">Solteira(o)</option>
                                        <option value="2">Casada(o)</option>
                                        <option value="3">Viúva(o)</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="text-primary" for="data_amostra">Possui Filhos?</label>
                                    <select class="form-select" aria-label="Default select example" >
                                        <option selected disabled></option>
                                        <option value="1">Sim</option>
                                        <option value="2">Não</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="text-primary" for="qntFilhos">Quantidade de Filhos</label>
                                    <input type="text" class="form-control" id="qntFilhos" name="qntFilhos"
                                        placeholder="Quantidade de Filhos" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label class="text-primary" for="telefoneFixo">Telefone Fixo</label>
                                    <input type="text" class="form-control" id="telefoneFixo" name="telefoneFixo"
                                        placeholder="(DD) XXXX-XXXX" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="text-primary" for="telefoneMovel">Telefone Móvel</label>
                                    <input type="text" class="form-control" id="telefoneMovel" name="telefoneMovel"
                                        placeholder="(DD) XXXX-XXXX" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="text-primary" for="telefoneRecado">Telefone Recado</label>
                                    <input type="text" class="form-control" id="telefoneRecado" name="telefoneRecado"
                                        placeholder="(DD) XXXX-XXXX" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label class="text-primary" for="nome">E-mail</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        placeholder="xxxxxxxx@xxxx.xx" required>
                                </div>
                            </div>
                            <div class="fixed-bottom-right">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end pe-5">
                                    <button class="btn btn-outline-primary me-md-2 btn-lg" type="button">Limpar</button>
                                    <button class="btn btn-primary btn-lg" type="submit">Gravar</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>

            <!-- Filiação -->
            <div class="tab-pane" id="filiacao" role="tabpanel" aria-labelledby="Filiacao-tab">
                <div class="row p-3">
                    <div class="container-fluid hidden">
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label class="text-primary" for="nomeMae">Nome da Mãe</label>
                                <input type="text" class="form-control" id="nomeMae" placeholder="Nome da Mãe"
                                    required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label class="text-primary" for="nomePai">Nome do Pai</label>
                                <input type="text" class="form-control" id="nomePai" placeholder="Nome do Pai"
                                    required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Residencia -->
            <div class="tab-pane" id="residencia" role="tabpanel" aria-labelledby="residencia-tab">

                <div class="col-md-12 p-2">
                    <div class="form-group">

                        <div class="d-flex align-items-center">
                            <div class="col-md-2 pr-0">
                                <label class="text-primary ml-1" for="prontuario">CEP</label>
                                <input class="form-control" type="number" id="prontuario" name="prontuario"
                                    placeholder="Digite o Cep" aria-label="Prontuario" min="0">
                            </div>
                            <div class="col-md-1 align-self-end ps-0 ">
                                <button type="submit" class="btn btn-lg btn-light"
                                    style="border-color:white; background-color:white" id="submitButton">
                                    <i class="fa fa-search text-color-primary"></i>
                                </button>
                                <button class="btn btn-lg pt-0" type="button" id="loadingButton"
                                    style="border-color:white; display:none" disabled>
                                    <span class="spinner-border text-primary" role="status" aria-hidden="true"></span>
                                </button>
                            </div>
                        </div>
                    </div>

                    @if (isset($error))
                        <div class="mt-2">
                            <label class="text-danger ml-1" id="erroProntuario">
                                <i class="fa-solid fa-triangle-exclamation" style="color: #ed1202;"></i>
                                <span class=> {{ $error }} </span>
                            </label>
                        </div>
                    @endif
                </div>

                <div class="row p-3">
                    <div class="container-fluid hidden">
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label class="text-primary" for="logradouro">Logradouro</label>
                                <input type="text" class="form-control" id="logradouro" placeholder="Nome da Mãe"
                                    required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label class="text-primary" for="numero">Número</label>
                                <input type="text" class="form-control" id="numero" placeholder="Número" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="text-primary" for="complemento">Complemento</label>
                                <input type="text" class="form-control" id="complemento" placeholder="Complemento"
                                    required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="text-primary" for="bairro">Bairro</label>
                                <input type="text" class="form-control" id="bairro" placeholder="Bairro" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label class="text-primary" for="cidade">Cidade</label>
                                <input type="text" class="form-control" id="cidade" placeholder="Cidade" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="text-primary" for="estado">Estado</label>
                                <input type="text" class="form-control" id="estado" placeholder="Estado" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="text-primary" for="uf">UF</label>
                                <input type="text" class="form-control" id="uf" placeholder="UF" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="financeiro" role="tabpanel" aria-labelledby="financeiro-tab">
                <div class="row p-3">
                    <div class="container-fluid hidden">
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label class="text-primary" for="tipoConta">Tipo de Conta</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected disabled></option>
                                    <option value="1">Conta Corrente</option>
                                    <option value="2">Conta Poupança</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label class="text-primary" for="Estado Civil">Banco</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected disabled></option>
                                    <option value="1">Solteira(o)</option>
                                    <option value="2">Casada(o)</option>
                                    <option value="3">Viúva(o)</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="text-primary" for="agencia">Agência</label>
                                <input type="text" class="form-control" id="agencia"
                                    placeholder="Numero da Agência" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="text-primary" for="numeroConta">Numero da Conta</label>
                                <input type="text" class="form-control" id="numeroConta"
                                    placeholder="Numero da Conta" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="adicionais" role="tabpanel" aria-labelledby="adicionais-tab">
                <div class="row p-3">
                    <div class="container-fluid hidden">
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label class="text-primary" for="cargaHoraria">Carga Horaria (CNES)</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected disabled></option>
                                    <option value="1">Conta Corrente</option>
                                    <option value="2">Conta Poupança</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="text-primary" for="grupoSanguinio">Grupo Sanguinio</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected disabled></option>
                                    <option value="1">Conta Corrente</option>
                                    <option value="2">Conta Poupança</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="text-primary" for="corOrigem">Cor / Origem Étnica</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected disabled></option>
                                    <option value="1">Conta Corrente</option>
                                    <option value="2">Conta Poupança</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label class="text-primary" for="escolaridade">Escolaridade</label>
                                <input type="text" class="form-control" id="escolaridade"
                                    placeholder="Numero da Escolaridade" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label class="text-primary" for="instEnsino">Instituição de Ensino</label>
                                <input type="text" class="form-control" id="instEnsino"
                                    placeholder="Instituição de Ensino" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label class="text-primary" for="tituloEleitor">Titulo de Eleitor</label>
                                <input type="text" class="form-control" id="tituloEleitor"
                                    placeholder="Numero do Titulo de Eleitor" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="text-primary" for="dtPrimeiroEmprego">Data do Primeiro
                                    Emprego</label>
                                <input type="date" class="form-control data-amostra" id="dtPrimeiroEmprego"
                                    name="dtPrimeiroEmprego" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="estrangeiro" role="tabpanel" aria-labelledby="estrangeiro-tab">
                <div class="row p-3">
                    <div class="container-fluid hidden">
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label class="text-primary" for="dtChegada">Data de Chegada ao Brasil</label>
                                <input type="date" class="form-control data-amostra" id="dtChegada" name="dtChegada"
                                    required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="text-primary" for="dtNaturalizacao">Data de Naturalização
                                    Brasileira</label>
                                <input type="date" class="form-control data-amostra" id="dtNaturalizacao"
                                    name="dtNaturalizacao" required>

                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="text-primary" for="corOrigem">Casada(o) com brasileira(o)?</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected disabled></option>
                                    <option value="1">Sim</option>
                                    <option value="2">Não</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="registro" role="tabpanel" aria-labelledby="registro-tab">
                <div class="row p-3">
                    <div class="container-fluid hidden">
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label class="text-primary" for="conselho">Conselho</label>
                                <input type="text" class="form-control" id="conselho"
                                    placeholder="Numero do Conselho" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="text-primary" for="corOrigem">Protocolo?</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected disabled></option>
                                    <option value="1">Sim</option>
                                    <option value="2">Não</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="text-primary" for="nProtocolo">Numero do Protocolo</label>
                                <input type="text" class="form-control" id="nProtocolo"
                                    placeholder="Numero do Numero do Protocolo" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label class="text-primary" for="especialidade">Especialidade</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected disabled></option>
                                    <option value="1">Sim</option>
                                    <option value="2">Não</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="text-primary" for="unidade">Unidade</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected disabled></option>
                                    <option value="1">Sim</option>
                                    <option value="2">Não</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label class="text-primary" for="ano">Ano</label>
                                <input type="text" class="form-control" id="ano" placeholder="Numero do Ano"
                                    required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="text-primary" for="dtInicio">Data de Inicio</label>
                                <input type="date" class="form-control data-amostra" id="dtInicio" name="dtChegada"
                                    required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="text-primary" for="dtTermino">Data de Termino</label>
                                <input type="date" class="form-control data-amostra" id="dtTermino" name="dtTermino"
                                    required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- jQuery -->
    <script>
        var firstTabEl = document.querySelector('#myTab li:last-child a')
        var firstTab = new bootstrap.Tab(firstTabEl)

        firstTab.show()
    </script>
@endsection


</html>
