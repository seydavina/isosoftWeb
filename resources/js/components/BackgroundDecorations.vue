<template>
  <div class="absolute inset-0 -z-10 overflow-hidden">
    <!-- Subtle Pattern -->
    <div
      class="relative w-full min-h-full bg-[url('/images/pattern-bg.jpeg')] bg-cover bg-center bg-no-repeat opacity-45"
      role="presentation"
      loading="lazy"
    />

    <!-- Decorative Circles -->
    <div
      class="absolute min-h-screen -top-40 -right-40 w-full h-full bg-primary/10 rounded-full blur-3xl"
      role="presentation"
    />
    <div
      class="absolute min-h-screen -bottom-40 -left-40 w-full h-full bg-primary/10 rounded-full blur-3xl"
      role="presentation"
    />

    <!-- Grid Pattern -->
    <div
      class="relative w-full min-h-screen inset-0 opacity-5 bg-grid-pattern"
      role="presentation"
    />
  </div>
</template>

<style>
.bg-grid-pattern {
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.1) 1px, transparent 1px),
    linear-gradient(to bottom, rgba(0, 0, 0, 0.1) 1px, transparent 1px);
  background-size: 24px 24px;
}
</style>
