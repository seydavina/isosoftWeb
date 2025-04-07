<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
import Navbar from "@/components/NavbarExt.vue";
import Footer from "@/components/Footer.vue";
import { onMounted } from "vue";
import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

/**
 * Example data for ISOETATFIN.
 * Adjust these lists based on your screenshot/requirements.
 */
const features = {
  tablesDeBase: ["Exercices", "Périodes", "Balance", "Plan comptable"],
  traitement: [
    "Choix exercices/périodes",
    "Import balance excel",
    "Génération de tous les états",
    "Etat de contrôle anomalies",
    "Clôture exercice",
    "Clôture période"
  ],
  etats: [
    "Extraction Excel DGID",
    "Édition groupée",
    "Bilan",
    "Compte de résultat",
    "Flux trésorerie",
    "Notes 1 à 39",
    "Page de garde",
    "Fiches R1 à R4",
    "Recevabilité"
  ],
};

/**
 * Two columns with images and sections.
 */
const columns = [
  {
    image: {
      src: "/images/illustrations/isoetatfin-base.png",
      alt: "États financiers - base",
    },
    sections: [
      { title: "Menu Tables de base", features: features.tablesDeBase },
      { title: "Menu Traitement", features: features.traitement },
    ],
  },
  {
    image: {
      src: "/images/illustrations/isoetatfin-stats.png",
      alt: "États financiers - stats",
    },
    sections: [{ title: "Menu États", features: features.etats }],
  },
];

onMounted(() => {
  // Animate header
  gsap.from(".header-content > *", {
    opacity: 0,
    y: -30,
    duration: 1,
    stagger: 0.2,
    ease: "power3.out",
  });

  // Animate columns on scroll
  columns.forEach((_, index) => {
    gsap.from(`.column-${index}`, {
      opacity: 0,
      x: index === 0 ? -50 : 50,
      duration: 1,
      scrollTrigger: {
        trigger: `.column-${index}`,
        start: "top 80%",
        end: "top 20%",
        toggleActions: "play none none reverse",
      },
    });
  });
});
</script>

<template>
  <div>
    <!-- Navbar -->
    <Navbar />

    <section
      class="relative overflow-hidden bg-gradient-to-b from-blue-50 to-blue-200 pt-32 pb-24"
    >
      <!-- Overlay décoratif (optionnel) -->
      <div class="absolute inset-0 overflow-hidden opacity-10">
        <div class="absolute inset-0 bg-grid-pattern transform rotate-12 scale-150"></div>
      </div>

      <!-- Main content -->
      <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
        <header class="mx-auto max-w-2xl text-center header-content">
          <h1
            class="text-base font-semibold leading-7 text-cyan-600 uppercase tracking-wide"
          >
            Service / Module
          </h1>
          <p
            class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl bg-clip-text text-transparent bg-gradient-to-r from-cyan-600 to-blue-600"
          >
            ISOETATFIN
          </p>
          <p class="mt-6 text-lg leading-8 text-gray-600">
            États financiers SYSCOHADA révisé. Générez, importez et contrôlez vos états
            comptables avec précision et conformité.
          </p>
        </header>

        <div class="relative mx-auto mt-20 max-w-7xl">
          <div class="grid grid-cols-1 gap-12 lg:grid-cols-2">
            <div
              v-for="(column, columnIndex) in columns"
              :key="columnIndex"
              :class="['space-y-10 column-' + columnIndex]"
            >
              <div class="relative group overflow-hidden rounded-xl shadow-lg">
                <img
                  :src="column.image.src"
                  :alt="column.image.alt"
                  class="w-full h-auto object-contain transform transition-transform duration-500 group-hover:scale-105"
                />
                <div
                  class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                ></div>
              </div>

              <div
                v-for="(section, sectionIndex) in column.sections"
                :key="sectionIndex"
                class="feature-section bg-white/80 backdrop-blur-sm rounded-lg p-6 shadow-md hover:shadow-lg transition-all duration-300"
              >
                <h2 class="text-xl font-bold text-gray-800 mb-4">
                  {{ section.title }}
                </h2>
                <ul class="list-disc list-inside space-y-1">
                  <li
                    v-for="(item, itemIndex) in section.features"
                    :key="itemIndex"
                    class="text-gray-700 hover:text-blue-600 transition-colors duration-200"
                  >
                    {{ item }}
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- CTA -->
          <div class="mt-16 text-center">
            <Link
              href="#contact"
              class="group inline-flex items-center gap-2 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-600 px-6 py-3 text-base font-medium text-white shadow-md transition-all duration-300 hover:scale-105 hover:shadow-xl"
            >
              Demander une démonstration
              <svg
                class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M13 7l5 5m0 0l-5 5m5-5H6"
                />
              </svg>
            </Link>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <Footer />
  </div>
</template>

<style scoped>
.bg-grid-pattern {
  background-image: linear-gradient(
      to right,
      rgba(99, 179, 237, 0.1) 1px,
      transparent 1px
    ),
    linear-gradient(to bottom, rgba(99, 179, 237, 0.1) 1px, transparent 1px);
  background-size: 24px 24px;
}

.feature-section {
  transform: translateY(0);
  will-change: transform;
}

.feature-section:hover {
  transform: translateY(-4px);
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.header-content {
  animation: fadeInUp 1s ease-out;
}
</style>
