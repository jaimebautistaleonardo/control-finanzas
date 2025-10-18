<template>
  <div class="layout">
    <Sidebar :collapsed="collapsed" @toggle="collapsed = !collapsed" />

    <div class="main">
      <header class="topbar">
        <button class="mobile-toggle" @click="collapsed = !collapsed">☰</button>
        <h1 class="page-title">{{ pageTitle }}</h1>
      </header>

      <section class="content">
        <router-view />
      </section>
    </div>
  </div>
</template>

<script setup>
import { ref, computed } from 'vue';
import { useRoute } from 'vue-router';
import Sidebar from '../components/Sidebar.vue';

const collapsed = ref(false);
const route = useRoute();

const pageTitle = computed(() => {
  return route.meta?.title || route.name || 'Panel';
});
</script>

<style scoped>
.layout {
  display: flex;
  min-height: 100vh;
  background: #f6f8fb;
}
.main {
  flex: 1;
  display: flex;
  flex-direction: column;
  min-width: 0;
}
.topbar {
  height: 56px;
  display: flex;
  align-items: center;
  gap: 1rem;
  padding: 0 1rem;
  background: #ffffff;
  border-bottom: 1px solid rgba(15, 23, 36, 0.04);
}
.mobile-toggle {
  display: none;
  background: transparent;
  border: none;
  font-size: 1.1rem;
  cursor: pointer;
}
.page-title { margin: 0; font-size: 1rem; font-weight:600; }

.content {
  padding: 1rem;
  overflow: auto;
}

/* Responsive: show mobile toggle and collapse sidebar on small screens */
@media (max-width: 900px) {
  .mobile-toggle { display: inline-flex; }
  .layout > aside { position: absolute; z-index: 40; height: 100vh; transform: translateX(-8px); }
}
</style>
