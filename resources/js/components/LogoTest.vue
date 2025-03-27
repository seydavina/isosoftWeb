<script setup lang="ts">
import Logo from './Logo.vue';
</script>

<template>
  <div class="space-y-4 p-4">
    <div>
      <h3>Logo par défaut</h3>
      <Logo customClass="h-20" variant="default" />
      <img src="/images/logos/logo-default.jpg" alt="Test direct default" class="h-20">
    </div>
    
    <div>
      <h3>Logo blanc</h3>
      <Logo customClass="h-20" variant="white" />
      <img src="/images/logos/logo-white.jpg" alt="Test direct white" class="h-20">
    </div>
    
    <div>
      <h3>Logo sombre</h3>
      <Logo customClass="h-20" variant="dark" />
      <img src="/images/logos/logo-dark.jpg" alt="Test direct dark" class="h-20">
    </div>
  </div>
</template> 