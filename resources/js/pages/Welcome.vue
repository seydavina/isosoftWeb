<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import { ref, onMounted, onUnmounted } from 'vue';
import Navbar from '@/Components/Navbar.vue';
import Hero from '@/Components/Hero.vue';
import Services from '@/Components/Services.vue';
import About from '@/Components/About.vue';
import Contact from '@/Components/Contact.vue';
import Footer from '@/Components/Footer.vue';

const currentSection = ref(0);
const sections = ['hero', 'services', 'about', 'contact'];
const isScrolling = ref(false);
const progress = ref(0);

// Fonction pour faire défiler vers une section
const scrollToSection = (index: number) => {
    if (isScrolling.value) return;
    isScrolling.value = true;
    currentSection.value = index;
    
    const section = document.getElementById(sections[index]);
    if (section) {
        section.scrollIntoView({ behavior: 'smooth' });
    }
    
    setTimeout(() => {
        isScrolling.value = false;
    }, 1000);
};

// Gestion du défilement
const handleScroll = () => {
    if (isScrolling.value) return;
    
    const scrollPosition = window.scrollY;
    const windowHeight = window.innerHeight;
    const docHeight = document.documentElement.scrollHeight;
    
    // Mise à jour de la barre de progression
    progress.value = (scrollPosition / (docHeight - windowHeight)) * 100;
    
    sections.forEach((section, index) => {
        const element = document.getElementById(section);
        if (element) {
            const rect = element.getBoundingClientRect();
            if (rect.top <= windowHeight / 2 && rect.bottom >= windowHeight / 2) {
                currentSection.value = index;
            }
        }
    });
};

onMounted(() => {
    window.addEventListener('scroll', handleScroll);
    
    // Initialiser la barre de progression
    setTimeout(handleScroll, 100);
    
    // Ajouter des classes d'animation aux éléments
    document.querySelectorAll('.animate-on-enter').forEach((el, index) => {
        el.classList.add(`delay-${index % 6}`);
    });
});

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
});
</script>

<template>
    <Head title="ISOSOFT - Solutions de Gestion d'Entreprise" />
    
    <!-- Barre de progression -->
    <div class="progress-bar" :style="{ width: `${progress}%` }"></div>
    
    <div class="min-h-screen bg-gradient-to-b from-gray-50 via-white to-gray-50">
        <Navbar :current-section="currentSection" />
        
        <main class="relative">
            <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
            <div class="absolute inset-0 bg-gradient-radial from-gray-900/5 via-transparent to-transparent"></div>
            
            <!-- Sections avec transitions améliorées -->
            <div class="relative">
                <section 
                    id="hero" 
                    class="section-transition min-h-screen flex items-center justify-center py-20"
                    :class="{'active-section': currentSection === 0}"
                >
                    <div class="container mx-auto px-6 page-section">
                        <Hero />
                    </div>
                </section>
                
                <section 
                    id="services" 
                    class="section-transition min-h-screen flex items-center justify-center py-20"
                    :class="{'active-section': currentSection === 1}"
                >
                    <div class="container mx-auto px-6 page-section">
                        <Services />
                    </div>
                </section>
                
                <section 
                    id="about" 
                    class="section-transition min-h-screen flex items-center justify-center py-20"
                    :class="{'active-section': currentSection === 2}"
                >
                    <div class="container mx-auto px-6 page-section">
                        <About />
                    </div>
                </section>
                
                <section 
                    id="contact" 
                    class="section-transition min-h-screen flex items-center justify-center py-20"
                    :class="{'active-section': currentSection === 3}"
                >
                    <div class="container mx-auto px-6 page-section">
                        <Contact />
                    </div>
                </section>
            </div>

            <!-- Pagination -->
            <div class="fixed right-8 top-1/2 -translate-y-1/2 z-50 hidden lg:block">
                <nav class="flex flex-col space-y-4">
                    <button 
                        v-for="(section, index) in sections" 
                        :key="section"
                        @click="scrollToSection(index)"
                        class="w-3 h-3 rounded-full transition-all duration-300 relative group"
                        :class="currentSection === index ? 'bg-blue-600 scale-125' : 'bg-gray-300 hover:bg-gray-400'"
                    >
                        <span class="absolute -left-24 top-1/2 -translate-y-1/2 text-sm font-medium text-gray-700 opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                            {{ section.charAt(0).toUpperCase() + section.slice(1) }}
                        </span>
                    </button>
                </nav>
            </div>
        </main>

        <Footer />
    </div>
</template>

<style>
/* Variables CSS */
:root {
    --transition-slow: 800ms;
    --transition-medium: 500ms;
    --transition-fast: 300ms;
    --bezier-smooth: cubic-bezier(0.65, 0, 0.35, 1);
}

/* Grille de fond */
.bg-grid-pattern {
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0.1) 1px, transparent 1px),
                      linear-gradient(to bottom, rgba(0, 0, 0, 0.1) 1px, transparent 1px);
    background-size: 24px 24px;
}

/* Dégradé radial */
.bg-gradient-radial {
    background: radial-gradient(circle at center, var(--tw-gradient-stops));
}

/* Barre de progression */
.progress-bar {
    position: fixed;
    top: 0;
    left: 0;
    height: 3px;
    background: linear-gradient(to right, #3b82f6, #60a5fa);
    transition: width 0.3s ease-out;
    z-index: 1000;
    box-shadow: 0 1px 3px rgba(59, 130, 246, 0.3);
}

/* Transitions entre les sections */
.section-transition {
    position: relative;
    transition: opacity var(--transition-slow) var(--bezier-smooth),
                transform var(--transition-slow) var(--bezier-smooth);
}

/* Section active */
.active-section .page-section {
    opacity: 1;
    transform: translateY(0);
}

/* Animation des sections au défilement */
.page-section {
    opacity: 0;
    transform: translateY(40px);
    transition: opacity var(--transition-slow) var(--bezier-smooth),
                transform var(--transition-slow) var(--bezier-smooth);
}

/* Transitions fluides pour le scroll */
html {
    scroll-behavior: smooth;
}

/* Animation de fondu à l'entrée */
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

/* Animation pour les éléments à l'intérieur des composants */
.animate-on-enter {
    opacity: 0;
    animation: fadeIn 0.8s forwards;
}

/* Délais d'animation séquentiels */
.delay-0 { animation-delay: 0s; }
.delay-1 { animation-delay: 0.1s; }
.delay-2 { animation-delay: 0.2s; }
.delay-3 { animation-delay: 0.3s; }
.delay-4 { animation-delay: 0.4s; }
.delay-5 { animation-delay: 0.5s; }

/* Effet de pulsation pour la pagination */
@keyframes pulse {
    0% {
        transform: scale(1);
        box-shadow: 0 0 0 0 rgba(37, 99, 235, 0.7);
    }
    70% {
        transform: scale(1.1);
        box-shadow: 0 0 0 10px rgba(37, 99, 235, 0);
    }
    100% {
        transform: scale(1);
        box-shadow: 0 0 0 0 rgba(37, 99, 235, 0);
    }
}

/* Appliquer l'animation de pulsation au point actif de la pagination */
[class*="rounded-full"].scale-125 {
    animation: pulse 2s infinite;
}
</style>