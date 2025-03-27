<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
</script>

<template>
  <div
    class="relative isolate overflow-hidden bg-gradient-to-b from-blue-400/25 to-cyan-700"
  >
    <!-- Decorative Background -->
    <div class="absolute inset-0 -z-10 overflow-hidden">
      <!-- Subtle Pattern -->
      <div
        class="relative w-full min-h-full bg-[url('/images/pattern-bg.jpeg')] bg-cover bg-center bg-no-repeat opacity-45"
      >
        <!-- Autres éléments de contenu ici -->
      </div>

      <!-- Decorative Circles -->
      <div
        class="absolute min-h-screen -top-40 -right-40 w-full h-full bg-primary/10 rounded-full blur-3xl"
      ></div>
      <div
        class="absolute min-h-screen -bottom-40 -left-40 w-full h-full bg-primary/10 rounded-full blur-3xl"
      ></div>

      <!-- Grid Pattern -->
      <div class="relative w-full min-h-screen inset-0 bg-grid-pattern opacity-5"></div>
    </div>

    <div
      class="mx-auto w-full px-6 pb-24 pt-10 sm:pb-32 lg:px-8 lg:py-40 flex justify-center"
    >
      <!-- Text Block -->
      <div class="max-w-2xl flex-shrink-0 lg:max-w-xl lg:pt-8 text-center">
        <!-- Main Heading -->
        <h1
          class="mt-10 text-4xl font-extrabold tracking-tight text-gray-900 sm:text-4xl animate-fade-in text-center"
        >
          <span
            class="bg-gradient-to-r from-primary to-primary-dark bg-clip-text text-cyan-700"
          >
            Management Services and Software IT Solutions
          </span>
        </h1>
        <p
          class="mt-6 text-lg leading-8 text-gray-800 animate-fade-in-delayed mx-auto text-center"
        >
          Des logiciels de gestion modulaires et intégrés, conçus pour
          répondre aux besoins variés des entreprises et organisations.
        </p>

        <!-- Call-to-Action Buttons -->
        <div
          class="mt-10 flex items-center justify-center gap-x-6 animate-fade-in-delayed-2"
        >
          <Link
            href="#contact"
            class="text-white bg-gradient-to-r from-cyan-800 to-cyan-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
          >
            <span class="relative z-10 flex items-center gap-2">
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
              class="absolute inset-0 bg-gradient-to-r from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"
            ></div>
          </Link>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
/* Fade-in Animations */
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
    opacity: 1;
  }
}

/* Grid Pattern */
.bg-grid-pattern {
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.1) 1px, transparent 1px),
    linear-gradient(to bottom, rgba(0, 0, 0, 0.1) 1px, transparent 1px);
  background-size: 24px 24px;
}

/* Hover Transition on Image */
img {
  transition: transform 0.5s ease-in-out, box-shadow 0.5s ease-in-out;
}
img:hover {
  transform: scale(1.02);
  box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}
</style>
