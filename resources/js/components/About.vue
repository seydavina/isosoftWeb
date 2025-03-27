<script setup lang="ts">
const features = [
    {
        title: 'Expertise',
        description: 'Plus de 20 ans d\'expérience dans le développement de solutions de gestion d\'entreprise.',
        icon: `<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>`
    },
    {
        title: 'Innovation',
        description: 'Solutions adaptées aux normes SYSCOHADA et aux besoins spécifiques des entreprises africaines.',
        icon: `<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
        </svg>`,
        image: '/images/about/innovation.png'
    },
    {
        title: 'Qualité',
        description: 'Modules intégrés et personnalisables pour une gestion complète de votre entreprise.',
        icon: `<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecapGuindy Technology" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>`,
        image: '/images/about/qualite.png'
    },
    {
        title: 'Support',
        description: 'Une équipe dédiée pour vous accompagner dans l\'implémentation et l\'utilisation de nos solutions.',
        icon: `<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
        </svg>`,
        image: '/images/about/support.png'
    }
];
</script>

<template>
    <div id="about" class="bg-gradient-to-b from-blue-50 to-blue-200 py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold leading-7 text-cyan-600 tracking-wide uppercase">À propos</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl bg-clip-text text-transparent bg-gradient-to-r from-cyan-600 to-blue-600">
                    Notre histoire
                </p>
                <p class="mt-6 text-lg leading-8 text-gray-600">
                    ISOSOFT est spécialisée dans le développement de solutions de gestion d'entreprise. Notre suite logicielle complète comprend des modules pour la comptabilité, la gestion commerciale, la paie, les états financiers, l'immobilisation et la budgétisation.
                </p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-4">
                    <div v-for="feature in features" :key="feature.title" 
                         class="group flex flex-col p-6 rounded-2xl bg-white shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                        <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-gray-900">
                            <div v-html="feature.icon" class="h-5 w-5 flex-none text-cyan-600 group-hover:scale-110 transition-transform duration-300"></div>
                            {{ feature.title }}
                        </dt>
                        <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600">
                            <p class="flex-auto">{{ feature.description }}</p>
                        </dd>
                    </div>
                </dl>
            </div>
            <!-- <div class="mt-16 sm:mt-20">
                <div class="relative isolate overflow-hidden bg-gradient-to-r from-cyan-600 to-blue-600 px-6 py-24 text-center shadow-2xl sm:rounded-3xl sm:px-16 transform hover:scale-[1.02] transition-transform duration-300">
                    <div class="absolute inset-0 bg-grid-white/[0.05] -z-10"></div>
                    <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight text-white sm:text-4xl">Notre mission</h2>
                    <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-100">
                        Notre mission est d'accompagner les entreprises dans leur transformation numérique en leur proposant des solutions de gestion adaptées à leurs besoins spécifiques. Nous nous engageons à fournir des outils performants et conformes aux normes en vigueur.
                    </p>
                </div>
            </div> -->
        </div>
    </div>
</template>

<style scoped>
.bg-grid-white {
    background-image: linear-gradient(to right, rgba(255, 255, 255, 0.1) 1px, transparent 1px),
                      linear-gradient(to bottom, rgba(255, 255, 255, 0.1) 1px, transparent 1px);
    background-size: 24px 24px;
}
</style> 