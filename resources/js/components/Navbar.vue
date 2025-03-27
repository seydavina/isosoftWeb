<script setup lang="ts">
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

const isMenuOpen = ref(false);
const isServicesOpen = ref(false);

const services = [
    { title: 'ISOCOMPTA', href: '/services/isocompta' },
    { title: 'ISOGESCOM', href: '/services/isogescom' },
    { title: 'ISOPAIE', href: '/services/isopai' },
    { title: 'ISOETATFIN', href: '/services/isoetatfin' },
    { title: 'ISOIMMO', href: '/services/isoimmo' },
    { title: 'ISOBUDGET', href: '/services/isobudget' },
    { title: 'ISOGESCOLE', href: '/services/isogescole' },
    { title: 'Autres Modules', href: '/services/autres-modules' }
];
</script>

<template>
    <nav class="bg-white/95 backdrop-blur-sm shadow-sm fixed w-full z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <Link href="/" class="flex items-center transition-transform duration-300 hover:scale-105">
                            <img src="/images/logos/logo-default.jpg" alt="ISOSOFT" class="h-10 w-auto">
                        </Link>
                    </div>
                    <div class="hidden sm:ml-8 sm:flex sm:space-x-8">
                        <Link href="/" class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 transition-colors duration-200">
                            Accueil
                        </Link>
                        <!-- Menu Services -->
                        <div class="relative inline-flex items-center" @mouseenter="isServicesOpen = true" @mouseleave="isServicesOpen = false">
                            <button class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 transition-colors duration-200">
                                Services
                                <svg class="ml-1 h-4 w-4 transition-transform duration-200" :class="{ 'rotate-180': isServicesOpen }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <!-- Dropdown Content -->
                            <div v-show="isServicesOpen" 
                                 class="absolute left-0 top-full mt-2 w-64 rounded-lg shadow-lg bg-white/95 backdrop-blur-sm ring-1 ring-black/5 z-50 transform transition-all duration-200 ease-in-out"
                                 :class="{ 'opacity-100 translate-y-0': isServicesOpen, 'opacity-0 -translate-y-2': !isServicesOpen }">
                                <div class="py-2" role="menu">
                                    <Link v-for="service in services" 
                                          :key="service.title"
                                          :href="service.href"
                                          class="block px-4 py-2.5 text-sm text-gray-700 hover:text-blue-600 hover:bg-gray-50/80 transition-colors duration-200"
                                          role="menuitem">
                                        {{ service.title }}
                                    </Link>
                                </div>
                            </div>
                        </div>
                        <Link href="#about" class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 transition-colors duration-200">
                            À propos
                        </Link>
                        <Link href="#contact" class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 transition-colors duration-200">
                            Contact
                        </Link>
                    </div>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    <Link href="/contact" class="inline-flex items-center px-6 py-2.5 border border-transparent text-sm font-medium rounded-full text-white bg-blue-600 hover:bg-blue-700 transition-all duration-200 hover:shadow-md">
                        Nous contacter
                    </Link>
                </div>
                <div class="flex items-center sm:hidden">
                    <button @click="isMenuOpen = !isMenuOpen" 
                            class="inline-flex items-center justify-center p-2 rounded-lg text-gray-500 hover:text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors duration-200">
                        <span class="sr-only">Ouvrir le menu</span>
                        <svg class="h-6 w-6 transition-transform duration-200" :class="{'hidden': isMenuOpen, 'block': !isMenuOpen }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="h-6 w-6 transition-transform duration-200" :class="{'block': isMenuOpen, 'hidden': !isMenuOpen }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Menu mobile -->
        <div class="sm:hidden transition-all duration-300 ease-in-out" 
             :class="{'opacity-100 translate-y-0': isMenuOpen, 'opacity-0 -translate-y-4 pointer-events-none': !isMenuOpen}">
            <div class="pt-2 pb-3 space-y-1 bg-white/95 backdrop-blur-sm shadow-lg">
                <Link href="/" class="block pl-4 pr-4 py-3 text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50/80 transition-colors duration-200">
                    Accueil
                </Link>
                <!-- Services Mobile -->
                <div>
                    <button @click="isServicesOpen = !isServicesOpen" 
                            class="w-full text-left pl-4 pr-4 py-3 text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50/80 transition-colors duration-200 flex items-center justify-between">
                        Services
                        <svg class="h-4 w-4 transition-transform duration-200" :class="{ 'rotate-180': isServicesOpen }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div v-show="isServicesOpen" class="bg-gray-50/50">
                        <Link v-for="service in services" 
                              :key="service.title"
                              :href="service.href"
                              class="block pl-8 pr-4 py-3 text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50/80 transition-colors duration-200">
                            {{ service.title }}
                        </Link>
                    </div>
                </div>
                <Link href="#about" class="block pl-4 pr-4 py-3 text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50/80 transition-colors duration-200">
                    À propos
                </Link>
                <Link href="#contact" class="block pl-4 pr-4 py-3 text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50/80 transition-colors duration-200">
                    Contact
                </Link>
            </div>
        </div>
    </nav>
</template>

<style scoped>
.nav-link {
    @apply inline-flex items-center px-3 py-2 text-sm font-medium text-gray-700 hover:text-primary transition-all duration-300 relative;
}

.nav-link::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background-color: var(--color-primary);
    transition: width 0.3s ease-in-out;
}

.nav-link:hover::after {
    width: 100%;
}

.dropdown-link {
    @apply block px-4 py-2.5 text-sm text-gray-700 hover:text-primary hover:bg-gray-50/80 transition-all duration-300 relative overflow-hidden;
}

.dropdown-link::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 0;
    background-color: var(--color-primary-light);
    opacity: 0.1;
    transition: width 0.3s ease-in-out;
}

.dropdown-link:hover::before {
    width: 100%;
}

.contact-button {
    @apply inline-flex items-center px-6 py-2.5 border border-transparent text-sm font-medium rounded-full text-white bg-primary hover:bg-primary-dark transition-all duration-300 relative overflow-hidden;
}

.contact-button::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
    transform: translateX(-100%);
    transition: transform 0.6s ease-in-out;
}

.contact-button:hover::before {
    transform: translateX(100%);
}

.menu-button {
    @apply inline-flex items-center justify-center p-2 rounded-lg text-gray-500 hover:text-primary hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 transition-all duration-300;
}

.mobile-nav-link {
    @apply block pl-4 pr-4 py-3 text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50/80 transition-all duration-300 relative overflow-hidden;
}

.mobile-nav-link::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 0;
    background-color: var(--color-primary-light);
    opacity: 0.1;
    transition: width 0.3s ease-in-out;
}

.mobile-nav-link:hover::before {
    width: 100%;
}

/* Animation du menu mobile */
@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.sm\:hidden {
    animation: slideDown 0.3s ease-out forwards;
}
</style> 