<template>
  <main class="container">
    
    <router-link to="/" role="button" class="outline secondary" style="margin-bottom: 2rem;">
      ⬅️ Retour aux panneaux
    </router-link>
git 
    <article v-if="panneau" class="grosse-card-detail">
      <div class="grid">
        <div>
          <img :src="`https://picsum.photos/600/400?random=${panneau.id}`" alt="Gros plan" class="img-detail">
        </div>
        <div class="infos-detail">
          <h1>{{ panneau.code_pannau }}</h1>
          <p><strong>Zone géographique :</strong> {{ panneau.zone }}</p>
          <p><strong>Statut :</strong> Actif</p> 
        </div>
      </div>
    </article>
    
    <div v-else class="loading-container">
      <article aria-busy="true">
        Chargement des détails du panneau en cours...
      </article>
    </div>

  </main>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import { useRoute } from 'vue-router';
import axios from 'axios';

const route = useRoute();
const panneau = ref(null);

const fetchPanneauDetail = async () => {
    
    const id = route.params.id; 
    try {
        const response = await axios.get(`http://127.0.0.1:8000/api/panneau/${id}`);
        panneau.value = response.data;
    } catch (error) {
        console.error("Erreur lors du chargement du détail :", error);
    }
};

onMounted(() => {
    fetchPanneauDetail();
});
</script>