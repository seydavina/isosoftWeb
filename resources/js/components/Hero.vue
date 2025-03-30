<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
import BackgroundDecorations from "@/components/BackgroundDecorations.vue";
</script>

<template>
  <div
    class="relative isolate overflow-hidden bg-gradient-to-b from-blue-400/25 to-cyan-700"
  >
    <BackgroundDecorations />

    <div
      class="mx-auto w-full px-6 pb-24 pt-10 sm:pb-32 lg:px-8 lg:py-40 flex justify-center"
    >
      <div class="max-w-2xl lg:max-w-xl lg:pt-8 text-center">
        <!-- Main Heading -->
        <h1
          class="mt-10 text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-6xl animate-fade-in"
        >
          <span
            class="bg-gradient-to-r from-primary to-primary-dark bg-clip-text text-cyan-800"
          >
            Management Services and Software IT Solutions
          </span>
        </h1>

        <!-- Description -->
        <p class="mt-6 text-lg leading-8 text-gray-800 animate-fade-in-delayed mx-auto">
          Des logiciels de gestion modulaires et intégrés, conçus pour répondre aux
          besoins variés des entreprises et organisations.
        </p>

        <!-- CTA Button -->
        <div class="mt-10 flex justify-center animate-fade-in-delayed-2">
          <Link
            href="#contact"
            class="btn-gradient group relative overflow-hidden rounded-lg px-5 py-2.5 text-sm font-medium text-white shadow-lg transition-all"
          >
            <span class="relative z-20 flex items-center gap-2">
              Découvrez nos solutions
              <svg
                class="h-4 w-4 transition-transform group-hover:translate-x-1"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 5l7 7-7 7"
                />
              </svg>
            </span>
            <div
              class="absolute inset-0 z-10 bg-gradient-to-r from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"
            />
          </Link>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
:root {
  --primary: #155e75;
  --primary-dark: #164e63;
}

.animate-fade-in {
  animation: fadeIn 0.8s ease-out forwards;
}

.animate-fade-in-delayed {
  animation: fadeIn 0.8s ease-out 0.2s forwards;
  opacity: 0;
}

.animate-fade-in-delayed-2 {
  animation: fadeIn 0.8s ease-out 0.4s forwards;
  opacity: 0;
}

@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.btn-gradient {
  background-image: linear-gradient(to right, var(--primary), var(--primary-dark));
}

.btn-gradient:hover {
  background-image: linear-gradient(to bottom right, var(--primary), var(--primary-dark));
}
</style>
