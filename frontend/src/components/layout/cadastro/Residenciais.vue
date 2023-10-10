<template>
  <v-row class="mx-2 mt-5">
    <v-col cols="12" sm="3">
      <v-label class="ml-1">CEP</v-label>
      <v-text-field :loading="loading" v-model="residencial.cep" color="blue" variant="outlined" label="Digite o CEP"
        append-inner-icon="mdi-magnify" single-line hide-details @click:append-inner="onClick" maxlength="8" :rules="[rules.required]"
       ></v-text-field>
    </v-col>
  </v-row>

  <v-row class="mx-2 mt-3">
    <v-col cols="12" sm="6">
      <v-text-field clearable color="blue" variant="outlined" v-model="residencial.logradouro"
        label="Logradouro"></v-text-field>
    </v-col>
    <v-col cols="12" sm="2">
      <v-text-field clearable color="blue" variant="outlined" v-model="residencial.numero" label="Numero"></v-text-field>
    </v-col>
    <v-col cols="12" sm="4">
      <v-text-field clearable color="blue" variant="outlined" v-model="residencial.complemento"
        label="Complemento"></v-text-field>
    </v-col>
  </v-row>

  <v-row class="mx-2">
    <v-col cols="12" sm="5">
      <v-text-field clearable color="blue" variant="outlined" v-model="residencial.bairro" label="Bairro"></v-text-field>
    </v-col>
    <v-col cols="12" sm="5">
      <v-text-field clearable color="blue" variant="outlined" v-model="residencial.cidade" label="Cidade"></v-text-field>
    </v-col>
    <v-col cols="12" sm="2">
      <v-text-field clearable color="blue" variant="outlined" v-model="residencial.estado" label="Estado"></v-text-field>
    </v-col>
  </v-row>

  <div class="text-center">

    <v-dialog v-model="loading" :scrim="false" persistent width="auto">
      <v-card color="#094899">
        <v-card-text>
          Buscando Cep ...
          <v-progress-linear indeterminate color="white" class="mb-0"></v-progress-linear>
        </v-card-text>
      </v-card>
    </v-dialog>

    <v-snackbar
      v-model="cepErro.status"
      :timeout="2000"
    >
      {{ cepErro.msg }}

      <template v-slot:actions>
        <v-btn
          color="blue"
          variant="text"
          @click="snackbar = false"
        >
          Close
        </v-btn>
      </template>
    </v-snackbar>
  </div>
</template>
<script>
import cidades from '@/helpers/location'

export default {
  data() {
    return {
      residencial: {
        logradouro: '',
        numero: '',
        complemento: '',
        bairro: '',
        cidade: '',
        estado: '',
        cep: '',

      },
      cepErro: {
        status: false, msg:''
      },           
      loading: false,
 

      rules: {
        required: value => !!value || 'Campo Obrigatório.',
        counter: value => value.length <= 10 || 'Max 10 characters', // Corrigido o maxlength
        email: value => {
          const pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\h7hgcf56h6jh6h65uhrdg78fchtc yughubguuuuuuuuuuighu5yhmi79f8jj9n,u68iukgi9u8i0o7kt9 iu8y9[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
          return pattern.test(value) || 'Invalid e-mail.'
        },
        numeros: value => {
          const pattern = /^[0-9]+$/
          return pattern.test(value) || 'Somente números são permitidos.'
        },
      },
    }
  },
  methods: {
    async onClick() {
      this.loading = true

      if (this.residencial.cep.length > 7) {
        try {
          const response = await fetch(`https://viacep.com.br/ws/${this.residencial.cep}/json/`);
          const data = await response.json();          
          if (data.erro == true) {

            this.loading = false
            this.cepErro.msg = "CEP não localizado"
            this.cepErro.status = true


          }
          else {
            this.loading = false
            this.residencial.logradouro = data.logradouro
            this.residencial.bairro = data.bairro
            this.residencial.cidade = data.localidade
            this.residencial.estado = data.uf
          }
        } catch (error) {
          console.error('Erro ao buscar o CEP:', error);
        }
      }else {
        this.loading = false
        this.cepErro.msg = 'CEP inválido!!'
        this.cepErro.status = true

      }
    }

  },
}
</script>


<style>
@import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css");
</style>
