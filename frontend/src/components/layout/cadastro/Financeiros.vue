<template>
  <v-row class="mx-2 mt-5">
    <v-col cols="12" sm="4">
      <v-select
        clearable
        label="Tipo de Conta"
        v-model="tipoConta"
        :items="['Conta Corrente', 'Conta Poupança']"
        variant="outlined"
        color="blue"
      ></v-select>
    </v-col>
  </v-row>
  <v-row class="mx-2">
    <v-col cols="12" sm="4">
      <v-autocomplete
        v-model="banco"
        :items="bancoOpt"
        item-title="compilado"
        item-value="compilado"
        label="Banco"
        variant="outlined"
        color="blue"
        return-object
        single-line
        clearable
      ></v-autocomplete>
    </v-col>
    <v-col cols="12" sm="2">
      <v-text-field
        clearable
        color="blue"
        variant="outlined"
        v-model="agencia"
        label="Agencia"
      ></v-text-field>
    </v-col>
    <v-col cols="12" sm="4">
      <v-text-field
        clearable
        color="blue"
        variant="outlined"
        v-model="numeroConta"
        label="Numero da Conta"
      ></v-text-field>
    </v-col>
  </v-row>
  <v-row class="mx-2 mt-5">
    <p>
      Código formatado:
      {{ banco && banco.compilado }}
      {{ agencia }}
      {{ tipoConta }}
      {{ numeroConta }}
    </p>
  </v-row>
</template>
<script>
import cidades from "@/helpers/location";

export default {
  data() {
    return {
      tipoConta: "",
      banco: null,
      agencia: "",
      numeroConta: "",
      loading: false,
      bancoOpt: [],

      rules: {
        required: (value) => !!value || "Campo Obrigatório.",
        counter: (value) => value.length <= 10 || "Max 10 characters", // Corrigido o maxlength
        email: (value) => {
          const pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          return pattern.test(value) || "Invalid e-mail.";
        },
        numeros: (value) => {
          const pattern = /^[0-9]+$/;
          return pattern.test(value) || "Somente números são permitidos.";
        },
      },
    };
  },
  async mounted() {
    try {
      const response = await fetch(`https://brasilapi.com.br/api/banks/v1`);
      const data = await response.json();

      if (data.erro == true) {
      } else {
        let acumulador = [];
        data.map((item) => {
          let code = item.code ? item.code.toString().padStart(3, "0") : "000";
          let nomeBanco = item.fullName ? item.fullName.toString().toUpperCase() : "";
          item.compilado = code + " / " + nomeBanco;
          this.bancoOpt.push(item);
        });
        console.log(this.bancoOpt);
      }
    } catch (error) {
      console.log("Erro ao buscar o Bancos:", error);
    }
  },
  methods: {},
};
</script>

<style>
@import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css");
</style>
