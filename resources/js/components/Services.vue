<script setup lang="ts">
import { ref } from 'vue';

// Structure des solutions avec leurs détails
const solutions = [
  {
    id: 'erp',
    name: 'ERP ISOSOFT',
    description: 'Une suite de 11 logiciels couvrant de multiples domaines fonctionnels.',
    icon: `<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
    </svg>`,
    modules: []
  },
  {
    id: 'isocompta',
    name: 'ISOCOMPTA',
    description: 'Gestion complète de la comptabilité de votre entreprise',
    icon: `<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V13.5zm0 2.25h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V18zm2.498-6.75h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V13.5zm0 2.25h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V18zm2.504-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zm0 2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V18zm2.498-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zM8.25 6h7.5v2.25h-7.5V6zM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 002.25 2.25h10.5a2.25 2.25 0 002.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0012 2.25z" />
    </svg>`,
    modules: [
      'Comptabilité générale, analytique et budgétaire',
      'Gestion des fichiers de base (plan comptable, journaux, etc.)',
      'Paramétrage des exercices, périodes et restrictions'
    ]
  },
  {
    id: 'isogescom',
    name: 'ISOGESCOM',
    description: 'Solution complète de gestion commerciale',
    icon: `<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
    </svg>`,
    modules: [
      'Gestion commerciale : achats, ventes, stocks',
      'Traitements et validations (documents, clôtures, inventaires)',
      'Statistiques détaillées sur les transactions commerciales'
    ]
  },
  {
    id: 'isopaie',
    name: 'ISOPAIE',
    description: 'Solution de paie adaptée à toutes les entreprises',
    icon: `<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>`,
    modules: [
      'Gestion de la paie avec paramétrage des bulletins, conventions collectives, et rubriques',
      'Suivi des salaires, heures supplémentaires, et diverses modalités de paiement'
    ]
  },
  {
    id: 'isoetatfin',
    name: 'ISOETATFIN',
    description: 'Production et gestion des états financiers',
    icon: `<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
    </svg>`,
    modules: [
      'Production d\'états financiers conformes au SYSCOHADA et à la révision',
      'Importation de balances, génération d\'états, bilan, compte de résultat, et flux de trésorerie'
    ]
  },
  {
    id: 'isoimmo',
    name: 'ISOIMMO',
    description: 'Gestion intégrée des immobilisations',
    icon: `<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
    </svg>`,
    modules: [
      'Gestion des immobilisations, inventaires et amortissements',
      'Suivi comptable et état des immobilisations'
    ]
  },
  {
    id: 'isobudget',
    name: 'ISOBUDGET',
    description: 'Gestion budgétaire efficace et transparente',
    icon: `<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
      <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
    </svg>`,
    modules: [
      'Gestion des engagements budgétaires',
      'Saisie et suivi des budgets, demandes d\'achats, et étapes de validation'
    ]
  },
  {
    id: 'isogescole',
    name: 'ISOGESCOLE',
    description: 'Gestion complète des établissements scolaires',
    icon: `<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
    </svg>`,
    modules: [
      'Gestion de la scolarité : facturation, suivi des élèves, relevés de notes, et archives',
      'Paramétrage des années scolaires, classes, rubriques et matières'
    ]
  },
  {
    id: 'autres',
    name: 'Autres Modules',
    description: 'Modules complémentaires pour des besoins spécifiques',
    icon: `<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
      <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
    </svg>`,
    modules: [
      'Gestion IPM (Intervenants, Participants, etc.)',
      'Gestion de la caisse et des opérations associées',
      'Diverses fonctionnalités complémentaires (gestion des fournisseurs, adhérents, etc.)'
    ]
  }
];

// État pour le module sélectionné
const selectedSolution = ref(solutions[0].id);

// Fonction pour définir le module sélectionné
const selectSolution = (id: string) => {
  selectedSolution.value = id;
};

// Obtenir la solution actuellement sélectionnée
const getCurrentSolution = () => {
  return solutions.find(s => s.id === selectedSolution.value) || solutions[0];
};
</script>

<template>
  <div id="solutions" class="relative bg-white py-24 sm:py-32">
    <!-- Background pattern -->
    <div class="absolute inset-0 bg-gradient-to-b from-white via-blue-50 to-white"></div>
    
    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl lg:text-center">
        <h2 class="text-base font-semibold leading-7 text-primary tracking-wide uppercase">Nos Solutions</h2>
        <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
          Services et Logiciels de Gestion
        </p>
        <p class="mt-6 text-lg leading-8 text-gray-600">
          ISOSOFT propose une gamme complète de logiciels de gestion adaptés aux besoins des entreprises, organisée autour de plusieurs modules spécialisés.
        </p>
      </div>
      
      <!-- Solutions tabs -->
      <div class="mt-16">
        <div class="flex flex-wrap justify-center gap-x-1 gap-y-4 border-b border-gray-200">
          <button
            v-for="solution in solutions"
            :key="solution.id"
            @click="selectSolution(solution.id)"
            :class="[
              'flex items-center px-4 py-2 text-sm font-medium border-b-2 transition-all duration-300 hover:text-primary',
              selectedSolution === solution.id
                ? 'border-primary text-primary'
                : 'border-transparent text-gray-500 hover:border-gray-300'
            ]"
          >
            <div class="mr-2" v-html="solution.icon"></div>
            <span>{{ solution.name }}</span>
          </button>
        </div>
        
        <!-- Solution details -->
        <div class="mt-8 overflow-hidden bg-white rounded-lg shadow-xl transform transition-all duration-500">
          <div class="p-6 md:p-8 animate-fadeIn">
            <div class="flex items-center mb-4">
              <div class="flex-shrink-0 p-2 rounded-md bg-cyan-400 text-primary" v-html="getCurrentSolution().icon"></div>
              <div class="ml-4">
                <h3 class="text-xl font-semibold text-gray-900">{{ getCurrentSolution().name }}</h3>
                <p class="text-gray-600">{{ getCurrentSolution().description }}</p>
              </div>
            </div>
            
            <div class="mt-6 space-y-6">
              <ul role="list" class="mt-8 space-y-3">
                <li v-for="(feature, index) in getCurrentSolution().modules" :key="index" class="flex items-start">
                  <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                  </div>
                  <p class="ml-3 text-base text-gray-700">{{ feature }}</p>
                </li>
              </ul>
              
              <div class="flex justify-center pt-6">
                <a href="#contact" class="inline-flex items-center px-3 py-2 border border-transparent text-base font-medium rounded-xl shadow-sm text-white bg-gradient-to-b from-cyan-400 to-cyan-400 transition-colors duration-300">
                  Demander une démonstration
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Grid display of all solutions for small viewports -->
      <div class="mt-16 hidden sm:block">
        <h3 class="text-center text-lg font-semibold text-gray-900 mb-8">Tous nos modules logiciels</h3>
        
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
          <div 
            v-for="solution in solutions" 
            :key="solution.id"
            class="flex flex-col rounded-lg border border-gray-200 bg-white shadow-sm transition-all duration-300 hover:shadow-lg hover:border-primary-light hover:translate-y-[-5px] cursor-pointer"
            @click="selectSolution(solution.id)"
          >
            <div class="flex h-16 w-16 items-center justify-center rounded-md bg-cyan-400 mx-auto mt-6">
              <div class="text-primary bg-cyan-400" v-html="solution.icon"></div>
            </div>
            <div class="flex flex-1 flex-col p-6 text-center">
              <h3 class="text-xl font-semibold text-gray-900">{{ solution.name }}</h3>
              <p class="mt-2 text-sm text-gray-600">{{ solution.description }}</p>
              
              <div class="mt-6">
                <span class="inline-flex items-center text-sm font-medium text-cyan-400">
                  En savoir plus
                  <svg class="ml-1 h-4 w-4 text-primary" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Call to action -->
      <div class="mt-20 rounded-2xl bg-gradient-to-b from-cyan-400 to-cyan-100 p-10 sm:p-16">
        <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
          <div class="text-center">
            <h3 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">
              Un ERP complet pour votre entreprise
            </h3>
            <p class="mt-6 text-lg leading-8 text-gray-600">
              Découvrez comment notre suite de logiciels peut transformer votre gestion d'entreprise et améliorer votre efficacité opérationnelle.
            </p>
            <div class="mt-10 flex flex-col items-center justify-center gap-y-4 sm:flex-row sm:gap-x-6">
              <a href="#contact" class="rounded-md bg-primary px-6 py-3 text-base font-semibold text-white shadow-sm hover:bg-primary-dark focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary flex items-center transition-all duration-300">
                Contacter un conseiller
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </a>
              <a href="#" class="text-base font-semibold leading-6 text-primary flex items-center hover:text-primary-dark transition-all duration-300">
                Télécharger notre brochure <span aria-hidden="true">→</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(10px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.animate-fadeIn {
  animation: fadeIn 0.5s ease-out forwards;
}

/* Définition des variables de couleurs */
:root {
  --color-primary: #3b82f6; /* Bleu */
  --color-primary-dark: #2563eb;
  --color-primary-light: #dbeafe;
}

/* Style pour l'onglet actif */
button.active .icon-container {
  background-color: var(--color-primary-light);
}

/* Effet hover sur les cartes */
.solution-card:hover {
  border-color: var(--color-primary);
  box-shadow: 0 10px 15px -3px rgba(59, 130, 246, 0.1), 0 4px 6px -2px rgba(59, 130, 246, 0.05);
}
</style>