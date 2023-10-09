<script setup>
import Pessoal from './cadastro/Pessoal.vue'
import { FormWizard, TabContent } from "vue3-form-wizard";
import "vue3-form-wizard/dist/style.css";
import Familiares from './cadastro/Familiares.vue';

function onComplete() {
    alert("Yay. Done!");
}
</script>
<template>
    <VCard class="my-3" h-100>
        <FormWizard @on-complete="onComplete" color="#094899">

           
            <TabContent title="Dados Familiares" icon="fa-solid fa-people-roof">
                <Familiares/>
            </TabContent>

         

            <TabContent title="Dados Pessoais" icon="fa fa-user">
                <Pessoal />
            </TabContent>

            <TabContent title="Dados Residenciais" icon="fa-solid fa-house-chimney">
                Yuhuuu! This seems pretty damn simple
            </TabContent>
            <TabContent title="Dados Financeiros" icon="fa-solid fa-building-columns">
                My first tab content
            </TabContent>
            <TabContent title="Dados Academicos" icon="fa-solid fa-user-graduate">
                My second tab content
            </TabContent>
            <TabContent title="Dados Estrangeiro" icon="fa-solid fa-earth-americas">
                Yuhuuu! This seems pretty damn simple
            </TabContent>
        </FormWizard>
    </VCard>
</template>

<style>
@import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css");
</style>
