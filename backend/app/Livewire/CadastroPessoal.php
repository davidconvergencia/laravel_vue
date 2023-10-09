<?php

namespace App\Livewire;

use Illuminate\Validation\ValidationException;
use Livewire\Component;

class CadastroPessoal extends Component
{


        public $currentStep = 'pessoal';
        public $pessoalData = [
            'nome' => '',
        ];
        public $filiacaoData = [];
        public $residenciaData = [];
        public $financeiroData = [];
        public $adicionaisData = [];
        public $estrangeiroData = [];
        public $registroData = [];
        public $errors = [];

        protected function rules()
        {
            // Defina as regras de validação para cada etapa do formulário
            switch ($this->currentStep) {
                case 'pessoal':
                    return [
                        'pessoalData.nome' => 'required',
                        'pessoalData.nacionalidade' => 'required',
                        'pessoalData.cpf' => 'required',
                        'pessoalData.sexo' => 'required',
                        'pessoalData.rg' => 'required',
                    ];
                    break;
                case 'filiacao':
                    return [
                        'filiacaoData.pai' => 'required',
                        'filiacaoData.mae' => 'required',
                    ];
                    break;
                case 'residencia':
                    return [
                        'residenciaData.endereco' => 'required',
                        'residenciaData.cidade' => 'required',
                        'residenciaData.estado' => 'required',
                        'residenciaData.cep' => 'required',
                    ];
                    break;
                // Adicione as regras de validação para as outras etapas aqui
                // ...
            }

            return [];
        }

        public function submit()
        {
        try{
            $this->validate();

        } catch (ValidationException $e) {
            $this->errors = $e->validator->getMessageBag()->toArray();
        }
        }

        public function nextStep()
        {
            $this->validate();

            $this->currentStep = $this->getNextStep();
        }

        public function previousStep()
        {
            $this->currentStep = $this->getPreviousStep();
        }

        private function getNextStep()
        {
            $steps = ['pessoal', 'filiacao', 'residencia', 'financeiro', 'adicionais', 'estrangeiro', 'registro'];
            $currentStepIndex = array_search($this->currentStep, $steps);

            return $steps[$currentStepIndex + 1] ?? $this->currentStep;
        }

        private function getPreviousStep()
        {
            $steps = ['pessoal', 'filiacao', 'residencia', 'financeiro', 'adicionais', 'estrangeiro', 'registro'];
            $currentStepIndex = array_search($this->currentStep, $steps);

            return $steps[$currentStepIndex - 1] ?? $this->currentStep;
        }

        public function render()
        {
            return view('livewire.cadastro-pessoal');
        }
    }
