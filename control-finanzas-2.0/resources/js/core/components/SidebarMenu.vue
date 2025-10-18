<template>
  <nav class="flex flex-1 flex-col gap-1 px-3 py-4" aria-label="Menú principal">
    <RouterLink
      v-for="item in menuItems"
      :key="item.to"
      :to="item.to"
      class="group flex items-center gap-3 rounded-md px-3 py-2 text-sm font-medium transition-colors duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-gray-900"
      :class="[
        isActive(item.to)
          ? 'bg-gray-800 text-white font-semibold'
          : 'text-gray-300 hover:bg-gray-800 hover:text-gray-100',
        isCollapsed ? 'justify-center' : 'justify-start',
      ]"
      :title="isCollapsed ? item.label : undefined"
      :aria-current="isActive(item.to) ? 'page' : undefined"
      :aria-label="isCollapsed ? item.label : undefined"
      @click="handleItemSelected"
    >
      <span class="flex items-center justify-center">
        <svg
          v-if="item.icon === 'home'"
          class="h-5 w-5"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="1.5"
          aria-hidden="true"
        >
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12L12 3l9.75 9" />
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M4.5 10.5V20a.75.75 0 00.75.75H9.75v-6h4.5v6h4.5A.75.75 0 0019.5 20v-9.5"
          />
        </svg>
        <svg
          v-else-if="item.icon === 'credit-card'"
          class="h-5 w-5"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="1.5"
          aria-hidden="true"
        >
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 9h19.5" />
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M4.5 5.25h15a2.25 2.25 0 012.25 2.25v9a2.25 2.25 0 01-2.25 2.25h-15A2.25 2.25 0 012.25 16.5v-9A2.25 2.25 0 014.5 5.25z"
          />
          <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 15h3" />
        </svg>
        <svg
          v-else-if="item.icon === 'banknotes'"
          class="h-5 w-5"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="1.5"
          aria-hidden="true"
        >
          <rect
            x="3"
            y="8.25"
            width="18"
            height="9"
            rx="1.5"
            ry="1.5"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 12.75h18" />
          <circle cx="12" cy="12.75" r="1.8" fill="none" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h12" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 6h.01M19.5 6h.01" />
        </svg>
        <svg
          v-else
          class="h-5 w-5"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="1.5"
          aria-hidden="true"
        >
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 19.5h18" />
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M7.5 19.5V11.25A2.25 2.25 0 019.75 9h.5A2.25 2.25 0 0112.5 11.25V19.5"
          />
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M12 19.5V7.5A2.25 2.25 0 0114.25 5.25h.5A2.25 2.25 0 0117 7.5V19.5"
          />
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M16.5 19.5v-4.5A2.25 2.25 0 0118.75 12.75h.5A2.25 2.25 0 0121 15v4.5"
          />
        </svg>
      </span>
      <span v-if="!isCollapsed" class="truncate text-sm font-medium">
        {{ item.label }}
      </span>
    </RouterLink>
  </nav>
</template>

<script setup lang="ts">
import { computed } from 'vue';
import { RouterLink, useRoute } from 'vue-router';

type MenuIcon = 'home' | 'credit-card' | 'banknotes' | 'chart';

interface MenuItem {
  label: string;
  to: string;
  icon: MenuIcon;
}

const props = defineProps<{
  isCollapsed: boolean;
}>();

const emit = defineEmits<{
  (event: 'itemSelected'): void;
}>();

const menuItems: MenuItem[] = [
  { label: 'Dashboard', to: '/dashboard', icon: 'home' },
  { label: 'Tarjetas', to: '/tarjetas', icon: 'credit-card' },
  { label: 'Pago de Tarjetas', to: '/pago-tarjetas', icon: 'banknotes' },
  { label: 'Presupuesto', to: '/presupuesto', icon: 'chart' },
];

const route = useRoute();

const isActive = (path: string): boolean => route.path === path;

const handleItemSelected = (): void => {
  emit('itemSelected');
};

const isCollapsed = computed(() => props.isCollapsed);
</script>
