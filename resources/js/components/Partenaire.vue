<script setup lang="ts">
import { onMounted, onUnmounted, ref } from 'vue';

const partners = [
    'SABS',
    'SET',
    'AXE',
    'Les Mamelles Jaboot',
    'Mutuelle Hôtelière du CA',
    'Licorne RH',
    '2TS',
    'CODEX',
    'Joseo/Poncet',
    'Global Transit',
    'SHN',
    'MAST’RH',
    'Genius',
    'ENDA Énergie',
    'Modelis',
    'Nectar Tax & Legal',
    'Maximerit',
    'Eureka',
    'AB Partners',
    'Campus France Sénégal',
    'Senbus Industries',
    'Sénégalaise de l’Automobile',
    'Cortex',
    'Siri/Diamar',
    'Saveur d’Asie',
    'BDTP',
    'One Concept',
];

const autoScrollInterval = 10000; // Intervalle en millisecondes pour la lecture automatique
const scrollWrapper = ref<HTMLElement | null>(null);
let autoScrollTimeout: ReturnType<typeof setInterval> | null = null;

const autoScroll = () => {
    if (scrollWrapper.value) {
        const { scrollLeft, scrollWidth, clientWidth } = scrollWrapper.value;
        const isEnd = scrollLeft + clientWidth >= scrollWidth - 1;
        if (isEnd) {
            scrollWrapper.value.scrollTo({ left: 0, behavior: 'smooth' });
        } else {
            scrollWrapper.value.scrollBy({ left: clientWidth, behavior: 'smooth' });
        }
    }
};

// Gestion de la navigation via la molette de la souris
const handleWheel = (event: WheelEvent) => {
    if (scrollWrapper.value) {
        // Annuler le défilement par défaut
        event.preventDefault();
        // Défilement horizontal en fonction du deltaY de la molette
        scrollWrapper.value.scrollBy({ left: event.deltaY, behavior: 'smooth' });
    }
};

onMounted(() => {
    autoScrollTimeout = setInterval(autoScroll, autoScrollInterval);
    if (scrollWrapper.value) {
        scrollWrapper.value.addEventListener('wheel', handleWheel, { passive: false });
    }
});

onUnmounted(() => {
    if (autoScrollTimeout) {
        clearInterval(autoScrollTimeout);
    }
    if (scrollWrapper.value) {
        scrollWrapper.value.removeEventListener('wheel', handleWheel);
    }
});
</script>

<template>
    <section class="py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold uppercase leading-7 tracking-wide text-cyan-600">Ils nous ont fait confiance</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Nos Partenaires</p>
                <p class="mt-6 text-lg leading-8 text-gray-600">
                    Nous collaborons avec des entreprises innovantes pour offrir des solutions performantes.
                </p>
            </div>

            <!-- Carrousel horizontal épuré sans fond blanc, navigation par molette activée -->
            <div ref="scrollWrapper" class="mx-auto mt-16 flex snap-x snap-mandatory space-x-6 overflow-x-auto">
                <div
                    v-for="(partner, index) in partners"
                    :key="index"
                    class="flex min-w-[200px] snap-center items-center justify-center p-6 transition-all duration-300 hover:-translate-y-1"
                >
                    <span class="text-lg font-medium text-gray-700">
                        {{ partner }}
                    </span>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
:root {
    --accent-color: #f97316; /* Accent orange vif */
}

.bg-grid-white {
    background-image:
        linear-gradient(to right, rgba(255, 255, 255, 0.1) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(255, 255, 255, 0.1) 1px, transparent 1px);
    background-size: 24px 24px;
}
</style>
