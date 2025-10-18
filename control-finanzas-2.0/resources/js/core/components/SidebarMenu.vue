<template>
  <nav class="flex flex-1 flex-col space-y-1 p-4">
    <RouterLink
      v-for="item in menuItems"
      :key="item.to"
      :to="item.to"
      class="flex items-center rounded px-3 py-2 text-sm transition-colors duration-150"
      :class="
        isActive(item.to)
          ? 'bg-gray-700 font-semibold text-white'
          : 'text-gray-300 hover:bg-gray-800 hover:text-white'
      "
      @click="handleItemSelected"
    >
      {{ item.label }}
    </RouterLink>
  </nav>
</template>

<script setup lang="ts">
import { useRoute, RouterLink } from 'vue-router';

interface MenuItem {
  label: string;
  to: string;
}

const emit = defineEmits<{
  (event: 'itemSelected'): void;
}>();

const menuItems: MenuItem[] = [
  { label: 'Dashboard', to: '/dashboard' },
  { label: 'Tarjetas', to: '/tarjetas' },
  { label: 'Pago de Tarjetas', to: '/pago-tarjetas' },
  { label: 'Presupuesto', to: '/presupuesto' },
];

const route = useRoute();

const isActive = (path: string): boolean => route.path === path;

const handleItemSelected = (): void => {
  emit('itemSelected');
};
</script>
