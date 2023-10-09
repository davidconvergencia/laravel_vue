<div>
    <div class="card">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link {{ $currentStep === 'pessoal' ? 'active' : '' }}" id="pessoal-tab"
                    wire:click="$set('currentStep', 'pessoal')" type="button" role="tab" aria-controls="pessoal"
                    aria-selected="{{ $currentStep === 'pessoal' ? 'true' : 'false' }}">Pessoal</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link {{ $currentStep === 'filiacao' ? 'active' : '' }}" id="filiacao-tab"
                    wire:click="$set('currentStep', 'filiacao')" type="button" role="tab" aria-controls="filiacao"
                    aria-selected="{{ $currentStep === 'filiacao' ? 'true' : 'false' }}">Filiação</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link {{ $currentStep === 'residencia' ? 'active' : '' }}" id="residencia-tab"
                    wire:click="$set('currentStep', 'residencia')" type="button" role="tab" aria-controls="residencia"
                    aria-selected="{{ $currentStep === 'residencia' ? 'true' : 'false' }}">Residência</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link {{ $currentStep === 'financeiro' ? 'active' : '' }}" id="financeiro-tab"
                    wire:click="$set('currentStep', 'financeiro')" type="button" role="tab" aria-controls="financeiro"
                    aria-selected="{{ $currentStep === 'financeiro' ? 'true' : 'false' }}">Financeiro</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link {{ $currentStep === 'adicionais' ? 'active' : '' }}" id="adicionais-tab"
                    wire:click="$set('currentStep', 'adicionais')" type="button" role="tab" aria-controls="adicionais"
                    aria-selected="{{ $currentStep === 'adicionais' ? 'true' : 'false' }}">Adicionais</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link {{ $currentStep === 'estrangeiro' ? 'active' : '' }}" id="estrangeiro-tab"
                    wire:click="$set('currentStep', 'estrangeiro')" type="button" role="tab"
                    aria-controls="estrangeiro" aria-selected="{{ $currentStep === 'estrangeiro' ? 'true' : 'false' }}">Estrangeiro</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link {{ $currentStep === 'registro' ? 'active' : '' }}" id="registro-tab"
                    wire:click="$set('currentStep', 'registro')" type="button" role="tab" aria-controls="registro"
                    aria-selected="{{ $currentStep === 'registro' ? 'true' : 'false' }}">Registro</button>
            </li>
        </ul>

        <div class="tab-content">
            <div class="card">
                @if ($currentStep === 'pessoal')
                <!-- Conteúdo da etapa "Pessoal" -->
                <div class="tab-pane active" id="pessoal" role="tabpanel" aria-labelledby="Pessoal-tab">
                    <form wire:submit.prevent="submit" class="needs-validation" novalidate>
                        <div class="row p-3">
                            <div class="container-fluid hidden">
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label class="text-primary" for="nome">Nome</label>
                                        <input wire:model="pessoalData.nome" type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                                        @error('nome') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label class="text-primary" for="data_amostra">Nacionalidade</label>
                                        <select wire:model="nacionalidade" class="form-select" aria-label="Default select example"
                                            name="nacionalidade" required>
                                            <option selected disabled></option>
                                            <option value="1">brasileira</option>
                                            <option value="2">estrangeira</option>
                                        </select>
                                        @error('pessoalData.nacionalidade') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="text-primary" for="cpf">CPF</label>
                                        <input wire:model="cpf" type="text" class="form-control" id="cpf" placeholder="CPF"
                                            name="cpf" required>
                                        @error('pessoalData.cpf') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="text-primary" for="sexo">Sexo</label>
                                        <select wire:model="sexo" class="form-select" aria-label="Default select example"
                                            name="sexo" required>
                                            <option selected disabled></option>
                                            <option value="1">Masculino</option>
                                            <option value="2">Feminino</option>
                                            <option value="3">Helicóptero de Combate</option>
                                        </select>
                                        @error('pessoalData.sexo') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label class="text-primary" for="rg">RG</label>
                                        <input wire:model="rg" type="text" class="form-control" id="rg" placeholder="RG"
                                            name="rg" required>
                                        @error('pessoalData.rg') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <!-- Adicione os outros campos do formulário aqui -->
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>

                @elseif ($currentStep === 'filiacao')
                <!-- Conteúdo da etapa "Filiação" -->
                @elseif ($currentStep === 'residencia')
                <!-- Conteúdo da etapa "Residência" -->
                @elseif ($currentStep === 'financeiro')
                <!-- Conteúdo da etapa "Financeiro" -->
                @elseif ($currentStep === 'adicionais')
                <!-- Conteúdo da etapa "Adicionais" -->
                @elseif ($currentStep === 'estrangeiro')
                <!-- Conteúdo da etapa "Estrangeiro" -->
                @elseif ($currentStep === 'registro')
                <!-- Conteúdo da etapa "Registro" -->
                @endif
            </div>
        </div>
    </div>

    <div>
        <!-- Botões para avançar e retroceder nas etapas -->
        @if ($currentStep !== 'pessoal')
        <button wire:click="previousStep">Voltar</button>
        @endif

        @if ($currentStep !== 'registro')
        <button wire:click="nextStep">Próximo</button>
        @endif
    </div>
</div>
