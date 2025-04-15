<script setup lang="ts">
import Footer from '@/components/Footer.vue';
import Navbar from '@/components/NavbarExt.vue';
import { Link } from '@inertiajs/vue3';
import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';
import { onMounted } from 'vue';

gsap.registerPlugin(ScrollTrigger);

const features = {
    administration: ['Gestion des inscriptions', 'Suivi des dossiers élèves', 'Établissement des emplois du temps'],
    scolarite: ['Gestion des absences', 'Suivi des notes et évaluations', 'Gestion des relevés de notes'],
    finances: ['Facturation et paiements', 'Suivi des bourses', 'Gestion des comptes élèves'],
};

const columns = [
    {
        image: {
            src: '/images/illustrations/isogescole-admin.png',
            alt: 'Administration scolaire',
        },
        sections: [
            { title: 'Menu Administration', features: features.administration },
            { title: 'Menu Scolarité', features: features.scolarite },
        ],
    },
    {
        image: {
            src: '/images/illustrations/isogescole-finance.png',
            alt: 'Finances scolaires',
        },
        sections: [{ title: 'Menu Finances', features: features.finances }],
    },
];

onMounted(() => {
    gsap.from('.header-content > *', {
        opacity: 0,
        y: -30,
        duration: 1,
        stagger: 0.2,
        ease: 'power3.out',
    });
    columns.forEach((_, index) => {
        gsap.from(`.column-${index}`, {
            opacity: 0,
            x: index === 0 ? -50 : 50,
            duration: 1,
            scrollTrigger: {
                trigger: `.column-${index}`,
                start: 'top 80%',
                end: 'top 20%',
                toggleActions: 'play none none reverse',
            },
        });
    });
});
</script>

<template>
    <div>
        <!-- Navbar -->
        <Navbar />

        <section class="relative overflow-hidden bg-gradient-to-b from-blue-50 to-blue-200 pb-24 pt-32">
            <!-- Overlay décoratif -->
            <div class="absolute inset-0 overflow-hidden opacity-10">
                <div class="bg-grid-pattern absolute inset-0 rotate-12 scale-150 transform"></div>
            </div>

            <!-- Contenu principal -->
            <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
                <header class="header-content mx-auto max-w-2xl text-center">
                    <h1 class="text-base font-semibold uppercase leading-7 tracking-wide text-cyan-600">Service / Module</h1>
                    <p
                        class="mt-2 bg-gradient-to-r from-cyan-600 to-blue-600 bg-clip-text text-4xl font-bold tracking-tight text-gray-900 text-transparent sm:text-5xl"
                    >
                        ISOGESCOLE
                    </p>
                    <p class="mt-6 text-lg leading-8 text-gray-600">
                        Gestion complète des établissements scolaires. Organisez inscriptions, scolarité et finances pour une administration fluide.
                    </p>
                </header>

                <div class="relative mx-auto mt-20">
                    <div class="grid grid-cols-1 gap-12 lg:grid-cols-2">
                        <!-- Chaque colonne utilise un conteneur flex-col avec des espacements fixes -->
                        <div v-for="(column, columnIndex) in columns" :key="columnIndex" class="flex flex-col space-y-10 column-{{ columnIndex }}">
                            <div class="group relative overflow-hidden rounded-xl shadow-lg">
                                <img
                                    :src="column.image.src"
                                    :alt="column.image.alt"
                                    class="h-auto w-full transform object-contain transition-transform duration-500 group-hover:scale-105"
                                />
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100"
                                ></div>
                            </div>

                            <div
                                v-for="(section, sectionIndex) in column.sections"
                                :key="sectionIndex"
                                class="feature-section rounded-lg bg-white/80 p-6 shadow-md backdrop-blur-sm transition-all duration-300 hover:shadow-lg"
                            >
                                <h2 class="mb-4 text-xl font-bold text-gray-800">{{ section.title }}</h2>
                                <ul class="list-inside list-disc space-y-1">
                                    <li
                                        v-for="(item, itemIndex) in section.features"
                                        :key="itemIndex"
                                        class="text-gray-700 transition-colors duration-200 hover:text-blue-600"
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
                                class="h-5 w-5 transition-transform duration-300 group-hover:translate-x-1"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </Link>
                    </div>
                </div>
            </div>
        </section>
        <Footer />
    </div>
</template>

<style scoped>
.bg-grid-pattern {
    background-image:
        linear-gradient(to right, rgba(99, 179, 237, 0.1) 1px, transparent 1px),
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
