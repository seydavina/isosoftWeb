<script setup lang="ts">
const services = [
  {
    title: "ISOCOMPTA",
    description:
      "Comptabilité générale, analytique et budgétaire avec gestion des fichiers de base et paramétrage complet des exercices.",
    icon: `<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.171-.879-1.172-2.303 0-3.182C10.536 7.719 11.768 7.5 12 7.5c1.45 0 2.9.439 4.003 1.318" />
        </svg>`,
    href: "/services/isocompta",
  },
  {
    title: "ISOGESCOM",
    description:
      "Gestion commerciale complète : achats, ventes, stocks, avec traitement des documents et statistiques détaillées.",
    icon: `<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 5.25l6.75 12.75M4.5 9h12m-11.5 3a8.25 8.25 0 100-16.5 8.25 8.25 0 000 16.5z" />
        </svg>`,
    href: "/services/isogescom",
  },
  {
    title: "ISOPAIE",
    description:
      "Gestion de la paie avec paramétrage des bulletins, conventions collectives, et suivi complet des salaires.",
    icon: `<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.171-.879-1.172-2.303 0-3.182C10.536 7.719 11.768 7.5 12 7.5c1.45 0 2.9.439 4.003 1.318" />
        </svg>`,
    href: "/services/isopai",
  },
  {
    title: "ISOETATFIN",
    description:
      "Production d'états financiers conformes au SYSCOHADA avec génération de bilans, comptes de résultat et flux de trésorerie.",
    icon: `<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
        </svg>`,
    href: "/services/isoetatfin",
  },
  {
    title: "ISOIMMO",
    description:
      "Gestion des immobilisations, inventaires et amortissements avec suivi comptable complet.",
    icon: `<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10-18l2.5 2.25L14.5 9l-2.5 2.25L9.5 9l-2.5 2.25M5.25 6.165V21m0 0h13.5m-13.5 0L9 9h6l-2.25 2.25M5.25 6.165V21m0 0h13.5m-13.5 0L9 9h6l-2.25 2.25" />
        </svg>`,
    href: "/services/isoimmo",
  },
  {
    title: "ISOBUDGET",
    description:
      "Gestion des engagements budgétaires avec saisie et suivi des budgets et demandes d'achats.",
    icon: `<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.171-.879-1.172-2.303 0-3.182C10.536 7.719 11.768 7.5 12 7.5c1.45 0 2.9.439 4.003 1.318" />
        </svg>`,
    href: "/services/isobudget",
  },
  {
    title: "ISOGESCOLE",
    description:
      "Gestion complète de la scolarité : facturation, suivi des élèves, relevés de notes, et archives. Paramétrage des années scolaires, classes, rubriques et matières.",
    icon: `<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
        </svg>`,
    href: "/services/isogescole",
  },
  {
    title: "Autres Modules",
    description:
      "Gestion IPM (Intervenants, Participants), gestion de la caisse, gestion des fournisseurs, adhérents, et diverses fonctionnalités complémentaires.",
    icon: `<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
        </svg>`,
    href: "/services/autres-modules",
  },
];
</script>

<template>
    <div id="services" class="bg-gradient-to-b from-white to-gray-700  py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold leading-7 text-blue-600 tracking-wide uppercase">Solutions de Gestion</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-blue-500 sm:text-4xl bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-blue-600">
                    Une suite complète de logiciels
                </p>
                <p class="mt-6 text-lg leading-8 text-gray-600">
                    Découvrez notre gamme de logiciels de gestion adaptés aux besoins des entreprises. Des solutions modulaires et intégrées pour optimiser tous vos processus métier.
                </p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
                    <div v-for="service in services" :key="service.title" 
                         class="group relative flex flex-col p-6 bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 ease-in-out transform hover:-translate-y-1 border border-gray-100">
                        <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-gray-900">
                            <div v-html="service.icon" class="h-6 w-6 flex-none text-blue-600 group-hover:scale-110 transition-transform duration-300" aria-hidden="true" />
                            {{ service.title }}
                        </dt>
                        <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600">
                            <p class="flex-auto">{{ service.description }}</p>
                            <p class="mt-6">
                                <a :href="service.href" class="inline-flex items-center text-sm font-semibold leading-6 text-blue-600 group-hover:text-blue-500 transition-colors duration-300">
                                    En savoir plus 
                                    <svg class="ml-2 h-4 w-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </p>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</template>

<style scoped>
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

.group {
    animation: fadeIn 0.6s ease-out forwards;
}
</style>
