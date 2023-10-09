<template>
    <v-row class="mx-5 mt-5">
        <v-text-field clearable color="blue" variant="outlined" v-model="nome" label="Nome Completo" 
           ></v-text-field>
    </v-row>

    <v-row class="mx-2 mt-3">
        <v-col cols="12" sm="4">
            <v-select clearable label="Sexo" v-model="sexo" :items="['feminino', 'masculino', 'não informar']" variant="outlined"
                color="blue"></v-select>

        </v-col>
        <v-col cols="12" sm="4">
            <v-select 
                clearable 
                label="Nacionalidade" 
                v-model="nacionalidade" 
                :items="['brasileiro', 'estrangeiro']" 
                variant="outlined"
                color="blue"></v-select>
        </v-col>
       
        <v-col cols="12" sm="4">
            <v-autocomplete 
                v-model="cidadeNascimento"
                :items="cidadesOp"
                item-title="compilado"
                item-value="compilado"
                label="Cidade de Nascimento"
                variant="outlined"
                color="blue"
                return-object
                single-line
                clearable
            ></v-autocomplete>
        </v-col>


    </v-row>

    <v-row class="mx-2 mt-0">
        <v-col cols="12" sm="3">
            <v-text-field clearable color="blue" variant="outlined" v-model="cpfrne"
                :rules="[rules.required, rules.counter]" label="CPF / RNE" maxlength="11"></v-text-field>
        </v-col>

        <v-col cols="12" sm="3">
            <v-text-field clearable color="blue" variant="outlined" v-model="rg"
                :rules="[rules.required, rules.counter]" label="RG" maxlength="11"></v-text-field>
        </v-col>
        <v-col cols="12" sm="3">
            <v-text-field clearable color="blue" variant="outlined" v-model="orgaoEmissor"
                :rules="[rules.required, rules.counter]" label="Orgão Emissor" maxlength="11"></v-text-field>
        </v-col>

        <v-col cols="12" sm="3">
            <v-text-field clearable type="date" color="blue" variant="outlined" v-model="dtEmissao"
                :rules="[rules.required, rules.counter]" label="Data de Emissão" maxlength="11"></v-text-field>
        </v-col>
    </v-row>

    <v-row class="mx-2 mt-0">
        <v-col cols="12" sm="4">
            <v-text-field clearable type="text" color="blue" v-model="telFixo" variant="outlined" :rules="[rules.required, rules.numeros]"
                label="Telefone Fixo" maxlength="11"></v-text-field>
        </v-col>
        <v-col cols="12" sm="4">
            <v-text-field clearable type="text" color="blue" v-model="telMovel" variant="outlined" :rules="[rules.required, rules.numeros]"
                label="Telefone Celular" maxlength="11"></v-text-field>
        </v-col>

        <v-col cols="12" sm="4">
            <v-text-field clearable type="text" color="blue" v-model="telRecado" variant="outlined" :rules="[rules.required, rules.numeros]"
                label="Telefone Recado" maxlength="11"></v-text-field>
        </v-col>



    </v-row>


    <v-row class="mx-5 mt-3">
        <v-text-field clearable color="blue" variant="outlined" v-model="email" :rules="[rules.required, rules.email]"
            label="E-mail"></v-text-field>

    </v-row>
</template>
<script>
import cidades from '@/helpers/location'

export default {
  data() {
    return {
      nome: '', // Corrigido o nome da variável
      sexo: '',
      nacionalidade: '',
      cidadeNascimento: null,
      cpfrne: '',
      rg: '',
      orgaoEmissor: '',
      dtEmissao: '',
      telFixo: '',
      telMovel: '',
      telRecado: '',
      email: '',
      cidadesOp: cidades,
      rules: {
        required: value => !!value || 'Campo Obrigatório.',
        counter: value => value.length <= 10 || 'Max 10 characters', // Corrigido o maxlength
        email: value => {
          const pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
          return pattern.test(value) || 'Invalid e-mail.'
        },
        numeros: value => {
          const pattern = /^[0-9]+$/
          return pattern.test(value) || 'Somente números são permitidos.'
        },
      },            
    }
  },
  mounted(){
    console.log(this.nome);
    console.log(this.sexo);
    console.log(this.nacionalidade);
    // ... Verifique outras variáveis de dados aqui ...
  }
}
</script>


<style>
.row-custom-top {
    margin-top: 25px;
    margin-left: 15px;
    margin-right: 15px;
}

.row-custom-top {
    margin-left: 15px;
    margin-right: 15px;
}
</style>
