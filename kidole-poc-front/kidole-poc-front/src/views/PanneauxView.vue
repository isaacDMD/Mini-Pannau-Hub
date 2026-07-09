<template>
  <main class="container">
    
    <header style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
      <h1>Les Panneaux Kidolé</h1>
      <button class="outline" style="width: auto;" @click="toggleTheme">
        Mode {{ theme === 'light' ? 'Sombre ' : 'Clair ' }}
      </button>
    </header>

    <div class="panneaux-grid">
        <article v-for="panneau in panneaux" :key="panneau.id" class="panneau-card">
            <img :src="`https://picsum.photos/300/200?random=${panneau.id}`" alt="Image du panneau" class="card-img">
            
            <div class="card-content">
              <h2>{{ panneau.code_pannau }}</h2>
              <p>Zone : {{ panneau.zone }}</p>
              <router-link :to="`/panneau/${panneau.id}`" role="button" class="secondary outline btn-sm">Voir plus</router-link>
            </div>
        </article>
    </div>

  </main>
</template>

<script setup>
import router from '@/router';
import axios from 'axios';
import { onMounted, ref } from 'vue';

const theme = ref('light');

const toggleTheme = () => {
    theme.value = theme.value === 'light' ? 'dark' : 'light';
    // LIGNE AJOUTÉE : On applique le thème sur tout le document
    document.documentElement.setAttribute('data-theme', theme.value);
};

const panneaux = ref([]);

const fetchPanneau = async () => {

    try {
        
        const response = await axios.get('http://127.0.0.1:8000/api/panneau')

        panneaux.value = response.data;
        
    } catch (error) {
        console.log("Erreur Interne",error)
    }
}

onMounted(()=>{
    fetchPanneau()
})
</script>