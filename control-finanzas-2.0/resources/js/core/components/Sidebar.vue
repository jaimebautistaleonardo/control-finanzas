<template>
  <aside :class="['sidebar', { collapsed }]">
    <div class="brand">
      <img :src="logo" alt="logo" v-if="!collapsed" />
      <span v-else class="logo-short">CF</span>
    </div>

    <nav class="menu">
      <router-link
        v-for="item in items"
        :key="item.name || item.path"
        :to="item.path || { name: item.name }"
        class="menu-item"
        :class="{ active: isActive(item) }"
      >
        <span class="icon" v-if="item.meta?.icon" v-html="item.meta.icon"></span>
        <span class="label" v-if="!collapsed">{{ item.meta?.title || item.name || item.path }}</span>
      </router-link>
    </nav>

    <div class="footer">
      <button class="collapse-btn" @click="$emit('toggle')">
        <span v-if="collapsed">»</span>
        <span v-else>‹</span>
      </button>
    </div>
  </aside>
</template>

<script setup>
import { computed } from 'vue'
import { useRouter, useRoute } from 'vue-router'
const props = defineProps({
  collapsed: { type: Boolean, default: false }
})

const router = useRouter()
const route = useRoute()

// obtener rutas visibles para el sidebar (filtro por meta.sidebar !== false)
const items = computed(() => {
  return router.getRoutes()
    .filter(r => r.meta && r.meta.sidebar !== false && (r.name || r.path))
    .sort((a, b) => (a.meta?.order || 0) - (b.meta?.order || 0))
})

const isActive = (item) => {
  return route.name === item.name || route.path.startsWith(item.path || '')
}

// resolved logo: intenta cargar resources/js/.../assets/logo.png y si falla usa /logo.png (public)
let logo = '/logo.png'
try {
  // ajusta la ruta relativa si colocas el logo en resources/js/assets/logo.png
  logo = new URL('../../../assets/logo.png', import.meta.url).href
} catch (e) {
  // keep fallback '/logo.png' (debe estar en public/)
}
</script>

<style scoped>
.sidebar {
  width: 220px;
  min-width: 64px;
  background: #0f1724;
  color: #e6eef8;
  height: 100vh;
  display: flex;
  flex-direction: column;
  transition: width .2s ease;
  overflow: hidden;
}
.sidebar.collapsed { width: 64px; }

.brand {
  padding: 1rem;
  display: flex;
  align-items: center;
  gap: .5rem;
  border-bottom: 1px solid rgba(255,255,255,0.03);
}
.brand img { height: 28px; }
.logo-short { font-weight:700; font-size:1rem; }

.menu {
  flex: 1;
  display: flex;
  flex-direction: column;
  padding: .5rem 0;
}
.menu-item {
  display: flex;
  align-items: center;
  gap: .75rem;
  padding: .6rem 1rem;
  color: inherit;
  text-decoration: none;
  transition: background .12s;
}
.menu-item:hover { background: rgba(255,255,255,0.02); }
.menu-item .icon { width: 20px; display: inline-flex; align-items:center; justify-content:center; }
.menu-item.active { background: rgba(255,255,255,0.04); font-weight:600; }

.footer {
  padding: .5rem;
  border-top: 1px solid rgba(255,255,255,0.02);
  display: flex;
  justify-content: center;
}
.collapse-btn {
  background: transparent;
  color: inherit;
  border: 1px solid rgba(255,255,255,0.03);
  padding: .35rem .5rem;
  border-radius: 6px;
  cursor: pointer;
}
</style>