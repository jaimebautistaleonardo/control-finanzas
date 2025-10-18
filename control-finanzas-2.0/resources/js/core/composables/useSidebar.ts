import { ref } from 'vue';

const STORAGE_KEY = 'finanzas.sidebar.collapsed';

const isCollapsed = ref(false);
const isMobileOpen = ref(false);
let isInitialized = false;

const loadState = (): void => {
  if (typeof window === 'undefined') {
    return;
  }

  const storedValue = window.localStorage.getItem(STORAGE_KEY);
  if (storedValue !== null) {
    try {
      isCollapsed.value = JSON.parse(storedValue);
    } catch (error) {
      isCollapsed.value = storedValue === 'true';
    }
  }
};

const persist = (): void => {
  if (typeof window === 'undefined') {
    return;
  }

  window.localStorage.setItem(STORAGE_KEY, JSON.stringify(isCollapsed.value));
};

const toggleCollapse = (): void => {
  isCollapsed.value = !isCollapsed.value;
  persist();
};

const openMobile = (): void => {
  isMobileOpen.value = true;
};

const closeMobile = (): void => {
  isMobileOpen.value = false;
};

const useSidebar = () => {
  if (!isInitialized) {
    loadState();
    isInitialized = true;
  }

  return {
    isCollapsed,
    isMobileOpen,
    toggleCollapse,
    openMobile,
    closeMobile,
    persist,
  } as const;
};

export default useSidebar;
