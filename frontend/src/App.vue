
<template>
  <v-app>
    <TopNav />

    <v-navigation-drawer v-model="drawer" :rail="rail" permanent @click="rail = false">
      <v-list-item>
        <template v-slot:append>
          <img :src="require('@/assets/img/logo.png')" :width="rail ? '38' : '150'" :height="rail ? '28' : '100'" />
          <v-btn variant="text" :icon="rail ? 'mdi-chevron-right' : 'mdi-chevron-left'"
            @click.stop="rail = !rail"></v-btn>
        </template>
      </v-list-item>

      <v-divider></v-divider>

      <v-list density="compact" nav>
        <v-list-item prepend-icon="mdi-home-city" title="Home" value="home"></v-list-item>
        <v-list-item prepend-icon="mdi-account" title="My Account" value="account"></v-list-item>
        <v-list-item prepend-icon="mdi-account-group-outline" title="Users" value="users"></v-list-item>
      </v-list>
    </v-navigation-drawer>

    <v-main style="height: 250px">

      <Cadastro />
    </v-main>

    <Footer />
  </v-app>
</template>
<script>
import { useLayout } from 'vuetify'
import Footer from './components/layout/Footer.vue'
import TopNav from './components/layout/TopNav.vue'
import Cadastro from './components/layout/Cadastro.vue'
import { defineComponent, onMounted } from 'vue';

// Defina o componente Child antes de usá-lo
const Child = {
  setup(props, ctx) {
    const { getLayoutItem } = useLayout();

    function print(key) {
      alert(JSON.stringify(getLayoutItem(key), null, 2));
    }

    return () => ctx.slots.default({ print });
  },
};

export default defineComponent({
  components: { Child, Footer,TopNav,Cadastro  }, // Coloque o componente Child aqui
  setup() {
    const debounce = (callback, delay) => {
      let tid;
      return function (...args) {
        tid && clearTimeout(tid);
        tid = setTimeout(() => {
          callback(...args);
        }, delay);
      };
    };

    const _ = window.ResizeObserver;

    onMounted(() => {
      window.ResizeObserver = class ResizeObserver extends _ {
        constructor(callback) {
          super(debounce(callback, 20));
        }
      };
    });

    return {
      drawer: true,
      rail: true,
    };
  },
});
</script>