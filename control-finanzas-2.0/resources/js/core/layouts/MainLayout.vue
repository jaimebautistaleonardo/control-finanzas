<template>
  <div class="flex min-h-screen bg-gray-100">
    <div
      v-if="isSidebarOpen"
      class="fixed inset-0 z-20 bg-black bg-opacity-50 md:hidden"
      @click="closeSidebar"
    />

    <aside
      :class="[
        'fixed inset-y-0 left-0 z-30 w-64 transform bg-gray-900 text-white transition-transform duration-200 ease-in-out md:static md:inset-auto md:flex md:flex-col md:translate-x-0 md:transform-none',
        isSidebarOpen ? 'translate-x-0' : '-translate-x-full',
      ]"
    >
      <div class="border-b border-gray-800 px-4 py-6">
        <h1 class="text-xl font-semibold">Control Finanzas 2.0</h1>
      </div>
      <SidebarMenu class="flex-1 overflow-y-auto" @itemSelected="handleMenuSelection" />
    </aside>

    <div class="flex flex-1 flex-col">
      <header class="flex items-center justify-between bg-white px-4 py-3 shadow md:hidden">
        <button
          type="button"
          class="rounded bg-gray-900 px-3 py-2 text-sm font-medium text-white"
          @click="toggleSidebar"
        >
          {{ isSidebarOpen ? 'Cerrar menú' : 'Abrir menú' }}
        </button>
        <span class="text-base font-semibold text-gray-900">Control Finanzas 2.0</span>
      </header>

      <main class="flex-1 p-6">
        <RouterView />
      </main>
    </div>
  </div>
</template>

<script setup lang="ts">
import { ref, watch } from 'vue';
import { RouterView, useRoute } from 'vue-router';
import SidebarMenu from '../components/SidebarMenu.vue';

const isSidebarOpen = ref(false);
const route = useRoute();

const toggleSidebar = (): void => {
  isSidebarOpen.value = !isSidebarOpen.value;
};

const closeSidebar = (): void => {
  isSidebarOpen.value = false;
};

const handleMenuSelection = (): void => {
  if (window.innerWidth < 768) {
    closeSidebar();
  }
};

watch(
  () => route.fullPath,
  () => {
    if (window.innerWidth < 768) {
      closeSidebar();
    }
  }
);
</script>
