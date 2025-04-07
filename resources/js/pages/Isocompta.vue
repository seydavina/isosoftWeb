<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
import Navbar from "@/components/Navbar.vue";
import Footer from "@/components/Footer.vue";
import { onMounted } from "vue";
import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

const features = {
  base: [
    "Plan Comptable général",
    "Plan Comptable analytique",
    "Plan Comptable budgétaire",
    "Gestion des journaux, codes, etc.",
    "Gestion des taux et paramètres",
  ],
  generaux: [
    "Paramétrage des exercices et périodes",
    "Gestion des restrictions d'accès",
    "Configurations avancées pour les devises",
  ],
  traitement: [
    "Saisie de pièces",
    "Saisie guidée",
    "Écritures automatiques",
    "Intégration d'opérations diverses",
  ],
  interrogation: [
    "Consultation des comptes",
    "Recherche multicritère",
    "Exportations et impressions",
  ],
  etatsComptables: [
    "Balance générale",
    "Balance analytique",
    "Balance budgétaire",
    "Grand Livre",
    "Journaux",
  ],
  imports: [
    "Importation des factures",
    "Importation de la paie",
    "Importation de fichiers bancaires",
  ],
};

const columns = [
  {
    image: { src: "/images/illustrations/accounting-base.png", alt: "Base comptable" },
    sections: [
      { title: "Menus Fichiers de base", features: features.base },
      { title: "Menus Paramètres généraux", features: features.generaux },
      { title: "Menu Traitement", features: features.traitement },
    ],
  },
  {
    image: {
      src: "/images/illustrations/accounting-stats.png",
      alt: "Rapports financiers",
    },
    sections: [
      { title: "Menu Interrogation", features: features.interrogation },
      { title: "Menu États Comptables", features: features.etatsComptables },
      { title: "Menu Imports Divers", features: features.imports },
    ],
  },
];

onMounted(() => {
  // Animation du header
  gsap.from(".header-content > *", {
    opacity: 0,
    y: -30,
    duration: 1,
    stagger: 0.2,
    ease: "power3.out",
  });

  // Animation des colonnes
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
  <!-- Navbar pour le retour vers l'accueil -->
  <Navbar />

  <section
    class="relative overflow-hidden bg-gradient-to-b from-blue-50 to-blue-200 pt-32 pb-24"
  >
    <!-- Overlay décoratif -->
    <div class="absolute inset-0 overflow-hidden opacity-10">
      <div class="absolute inset-0 bg-grid-pattern transform rotate-12 scale-150"></div>
    </div>

    <!-- Contenu principal -->
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
          ISOCOMPTA
        </p>
        <p class="mt-6 text-lg leading-8 text-gray-600">
          Comptabilité générale, analytique et budgétaire. Gérez efficacement l'ensemble
          de vos opérations comptables grâce à une interface claire et des fonctionnalités
          avancées.
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

  <Footer />
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
