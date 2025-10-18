<template>
  <div class="flex min-h-screen bg-gray-50">
    <div
      v-if="isMobileOpen"
      class="fixed inset-0 z-30 bg-black/50 transition-opacity duration-200 md:hidden"
      aria-hidden="true"
      @click="closeMobile"
    />

    <aside
      id="sidebar"
      :class="[
        'fixed inset-y-0 left-0 z-40 flex h-full transform flex-col bg-gray-900 text-gray-200 transition-all duration-200 ease-in-out md:static md:inset-auto md:z-auto md:translate-x-0 md:transform-none',
        isMobileOpen ? 'translate-x-0' : '-translate-x-full md:translate-x-0',
        isCollapsed ? 'md:w-20' : 'md:w-64',
        'w-64',
      ]"
    >
      <div
        :class="[
          'flex h-14 items-center border-b border-gray-800 px-4 transition-all duration-200',
          isCollapsed ? 'justify-center' : 'justify-start gap-3',
        ]"
      >
        <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-gray-800 text-lg font-semibold text-white">
          CF
        </div>
        <span
          v-if="!isCollapsed"
          class="text-sm font-semibold uppercase tracking-wide text-gray-100"
        >
          Control Finanzas
        </span>
      </div>
      <SidebarMenu
        class="flex-1 overflow-y-auto"
        :is-collapsed="isCollapsed"
        @itemSelected="handleMenuSelection"
      />
    </aside>

    <div class="flex flex-1 flex-col">
      <header class="flex h-14 items-center justify-between bg-gray-900 px-4 text-gray-200 shadow md:px-6">
        <div class="flex items-center gap-3">
          <button
            type="button"
            class="inline-flex items-center justify-center rounded-md p-2 text-gray-200 transition-colors duration-150 hover:bg-gray-800 hover:text-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-gray-900 md:hidden"
            :aria-expanded="isMobileOpen"
            aria-controls="sidebar"
            :aria-label="isMobileOpen ? 'Cerrar menú lateral' : 'Abrir menú lateral'"
            @click="toggleMobileMenu"
          >
            <span class="sr-only">Alternar menú</span>
            <svg
              v-if="!isMobileOpen"
              class="h-6 w-6"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.5"
              aria-hidden="true"
            >
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 7h16M4 12h16M4 17h16" />
            </svg>
            <svg
              v-else
              class="h-6 w-6"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.5"
              aria-hidden="true"
            >
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
          <div class="flex items-center gap-3">
            <div class="hidden h-9 w-9 items-center justify-center rounded-lg bg-gray-800 text-lg font-semibold text-white md:flex">
              CF
            </div>
            <span class="text-base font-semibold text-white">Control Finanzas 2.0</span>
          </div>
        </div>
        <button
          type="button"
          class="hidden items-center gap-2 rounded-md border border-transparent bg-gray-800/60 p-2 text-gray-200 transition-colors duration-150 hover:bg-gray-800 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-gray-900 md:flex"
          :aria-expanded="!isCollapsed"
          aria-controls="sidebar"
          aria-label="Alternar tamaño del menú lateral"
          @click="toggleCollapse"
        >
          <svg
            class="h-5 w-5 transition-transform duration-200"
            :class="isCollapsed ? 'rotate-45' : 'rotate-0'"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="1.5"
            aria-hidden="true"
          >
            <path stroke-linecap="round" stroke-linejoin="round" d="M8 3v3.75M16 3v3.75M4.5 21h15M4.5 6.75h15" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 9l6 6m0-6l-6 6" />
          </svg>
          <span class="text-sm font-medium">{{ isCollapsed ? 'Expandir' : 'Colapsar' }}</span>
        </button>
      </header>
      <main class="flex-1 overflow-y-auto p-4 md:p-6">
        <RouterView />
      </main>
    </div>
  </div>
</template>

<script setup lang="ts">
import { onBeforeUnmount, onMounted, watch } from 'vue';
import { RouterView, useRoute } from 'vue-router';
import SidebarMenu from '../components/SidebarMenu.vue';
import useSidebar from '../composables/useSidebar';

const { isCollapsed, isMobileOpen, toggleCollapse, openMobile, closeMobile } = useSidebar();

const route = useRoute();

const toggleMobileMenu = (): void => {
  if (isMobileOpen.value) {
    closeMobile();
    return;
  }

  openMobile();
};

const handleMenuSelection = (): void => {
  closeMobile();
};

watch(
  () => route.fullPath,
  () => {
    closeMobile();
  }
);

const handleResize = (): void => {
  if (window.innerWidth >= 768) {
    closeMobile();
  }
};

const handleKeydown = (event: KeyboardEvent): void => {
  if (event.key === 'Escape') {
    closeMobile();
  }
};

onMounted(() => {
  window.addEventListener('resize', handleResize);
  window.addEventListener('keydown', handleKeydown);
});

onBeforeUnmount(() => {
  window.removeEventListener('resize', handleResize);
  window.removeEventListener('keydown', handleKeydown);
});
</script>
