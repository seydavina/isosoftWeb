<script setup lang="ts">
import { Link } from "@inertiajs/vue3";

// Vous pouvez éventuellement créer des objets/variables pour structurer
// vos contenus si besoin (listes, images, etc.).
const featuresBase = [
  "Plan Comptable général",
  "Plan Comptable analytique",
  "Plan Comptable budgétaire",
  "Gestion des journaux, codes, etc.",
  "Gestion des taux et paramètres",
];

const featuresGeneraux = [
  "Paramétrage des exercices et périodes",
  "Gestion des restrictions d’accès",
  "Configurations avancées pour les devises",
];

const featuresTraitement = [
  "Saisie de pièces",
  "Saisie guidée",
  "Écritures automatiques",
  "Intégration d’opérations diverses",
];

const featuresInterrogation = [
  "Consultation des comptes",
  "Recherche multicritère",
  "Exportations et impressions",
];

const featuresEtatsComptables = [
  "Balance générale",
  "Balance analytique",
  "Balance budgétaire",
  "Grand Livre",
  "Journaux",
];

const featuresImports = [
  "Importation des factures",
  "Importation de la paie",
  "Importation de fichiers bancaires",
];
</script>

<template>
  <section
    class="relative overflow-hidden bg-gradient-to-b from-blue-50 to-blue-200 py-24 sm:py-32"
  >
    <!-- Hero / Titre -->
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <header class="mx-auto max-w-2xl lg:text-center">
        <h1
          class="text-base font-semibold leading-7 text-cyan-600 uppercase tracking-wide"
        >
          Service / Module
        </h1>
        <p
          class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl bg-clip-text text-transparent bg-gradient-to-r from-cyan-600 to-blue-600"
        >
          ISOCOMPTA
        </p>
        <p class="mt-6 text-lg leading-8 text-gray-600">
          Comptabilité générale, analytique et budgétaire. Gérez efficacement l’ensemble
          de vos opérations comptables grâce à une interface claire et des fonctionnalités
          avancées.
        </p>
      </header>
    </div>

    <!-- Contenu principal -->
    <div class="relative mx-auto mt-16 max-w-7xl px-6 lg:px-8">
      <!-- Exemple : Présentation en 2 colonnes -->
      <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
        <!-- Colonne 1 : Menus principaux -->
        <div class="space-y-10">
          <!-- Menu Fichiers de base -->
          <div>
            <h2 class="text-xl font-bold text-gray-800 mb-4">Menus Fichiers de base</h2>
            <ul class="list-disc list-inside space-y-1 text-gray-700">
              <li v-for="(item, i) in featuresBase" :key="i">{{ item }}</li>
            </ul>
          </div>

          <!-- Menu Paramètres généraux -->
          <div>
            <h2 class="text-xl font-bold text-gray-800 mb-4">
              Menus Paramètres généraux
            </h2>
            <ul class="list-disc list-inside space-y-1 text-gray-700">
              <li v-for="(item, i) in featuresGeneraux" :key="i">{{ item }}</li>
            </ul>
          </div>

          <!-- Menu Traitement -->
          <div>
            <h2 class="text-xl font-bold text-gray-800 mb-4">Menu Traitement</h2>
            <ul class="list-disc list-inside space-y-1 text-gray-700">
              <li v-for="(item, i) in featuresTraitement" :key="i">{{ item }}</li>
            </ul>
          </div>
        </div>

        <!-- Colonne 2 : Autres menus -->
        <div class="space-y-10">
          <!-- Menu Interrogation -->
          <div>
            <h2 class="text-xl font-bold text-gray-800 mb-4">Menu Interrogation</h2>
            <ul class="list-disc list-inside space-y-1 text-gray-700">
              <li v-for="(item, i) in featuresInterrogation" :key="i">{{ item }}</li>
            </ul>
          </div>

          <!-- Menu Etats Comptables -->
          <div>
            <h2 class="text-xl font-bold text-gray-800 mb-4">Menu Etats Comptables</h2>
            <ul class="list-disc list-inside space-y-1 text-gray-700">
              <li v-for="(item, i) in featuresEtatsComptables" :key="i">{{ item }}</li>
            </ul>
          </div>

          <!-- Menu Imports divers -->
          <div>
            <h2 class="text-xl font-bold text-gray-800 mb-4">Menu Imports Divers</h2>
            <ul class="list-disc list-inside space-y-1 text-gray-700">
              <li v-for="(item, i) in featuresImports" :key="i">{{ item }}</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- CTA (Call to Action) -->
      <div class="mt-16 text-center">
        <Link
          href="#contact"
          class="inline-flex items-center gap-2 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-600 px-6 py-3 text-base font-medium text-white shadow-md transition-transform hover:scale-105"
        >
          Demander une démonstration
        </Link>
      </div>
    </div>
  </section>
</template>

<style scoped>
/* Vous pouvez personnaliser l'animation, les espacements, etc. ici */
</style>
