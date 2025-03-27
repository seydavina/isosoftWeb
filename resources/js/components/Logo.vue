<script setup lang="ts">
defineProps<{
  customClass?: string;
  variant?: 'default' | 'white' | 'dark';
}>();
</script>

<template>
  <div :class="customClass">
    <img 
      :src="`/images/logos/logo-${variant || 'default'}.jpg`" 
      alt="ISOSOFT" 
      class="w-full h-auto"
    >
  </div>
</template>

<style scoped>
img {
  width: 100%;
  height: auto;
}
</style> 