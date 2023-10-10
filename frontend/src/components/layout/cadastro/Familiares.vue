<template>
    <v-row class="mx-5 mt-5">
        <v-text-field clearable color="blue" variant="outlined" v-model="nomeMae" label="Nome da Mãe" 
           ></v-text-field>
    </v-row>
    <v-row class="mx-5 mt-5">
        <v-text-field clearable color="blue" variant="outlined" v-model="nomePai" label="Nome do Pai" 
           ></v-text-field>
    </v-row>


    <v-row class="mx-2 mt-3">
        <v-col cols="12" sm="3">
            <v-select clearable label="Estado Civil" v-model="estadoCivil" :items="['Solteira(o)', 'Casada(o)', 'Divorciada(o)']" variant="outlined"
                color="blue"></v-select>

        </v-col>
        <v-col cols="12" sm="3">
            <v-text-field clearable color="blue" variant="outlined" v-model="qntFilhos" min=0 type="number" label="Quantidade de Filhos"
           ></v-text-field>
        </v-col>
    </v-row>

</template>
<script>
import cidades from '@/helpers/location'

export default {
  data() {
    return {
      nomeMae: '', // Corrigido o nome da variável
      nomePai: '',
      estadoCivil: '',
      qntFilhos: null,
     
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

  }
}
</script>


<style>

</style>
