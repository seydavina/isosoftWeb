<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';

const isMobileMenuOpen = ref(false);
const isServicesDropdownOpen = ref(false);
let dropdownCloseTimeout: ReturnType<typeof setTimeout> | null = null;

const services = [
    { title: 'ISOCOMPTA', href: '/Isocompta' },
    { title: 'ISOGESCOM', href: '/Isogescom' },
    { title: 'ISOPAIE', href: '/Isopaie' }, // Correction du typo
    { title: 'ISOETATFIN', href: '/Isoetatfin' },
    { title: 'ISOIMMO', href: '/Isoimmo' },
    { title: 'ISOBUDGET', href: '/Isobudget' },
    { title: 'ISOGESCOLE', href: '/Isogescole' },
    { title: 'Autres Modules', href: '/AutresModules' },
];

// Menu mobile
const toggleMobileMenu = () => {
    isMobileMenuOpen.value = !isMobileMenuOpen.value;
    // On ferme le dropdown Services lorsqu'on ouvre/ferme le menu mobile
    isServicesDropdownOpen.value = false;
};

const closeMobileMenu = () => {
    isMobileMenuOpen.value = false;
};

// Gestion du dropdown Services avec délai pour éviter les fermetures précipitées
const openServicesDropdown = () => {
    if (dropdownCloseTimeout) {
        clearTimeout(dropdownCloseTimeout);
        dropdownCloseTimeout = null;
    }
    isServicesDropdownOpen.value = true;
};

const closeServicesDropdownWithDelay = () => {
    dropdownCloseTimeout = setTimeout(() => {
        isServicesDropdownOpen.value = false;
    }, 200);
};

const closeServicesDropdown = () => {
    if (dropdownCloseTimeout) {
        clearTimeout(dropdownCloseTimeout);
        dropdownCloseTimeout = null;
    }
    isServicesDropdownOpen.value = false;
};

// Fonction pour fermer tous les menus (utile pour les clics sur un lien)
const closeAllMenus = () => {
    closeMobileMenu();
    closeServicesDropdown();
};
</script>

<template>
    <nav class="fixed z-50 w-full bg-white/95 shadow-sm backdrop-blur-sm">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-20 justify-between">
                <!-- Logo -->
                <div class="flex items-center">
                    <Link
                        href="/"
                        class="inline-flex items-center rounded-lg transition-transform duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2"
                    >
                        <img src="/images/logos/logo-default.jpg" alt="ISOSOFT" class="h-10 w-auto" loading="lazy" />
                    </Link>
                </div>

                <!-- Navigation desktop -->
                <div class="hidden sm:flex sm:items-center sm:space-x-8">
                    <div
                        class="group relative"
                        @mouseenter="openServicesDropdown"
                        @mouseleave="closeServicesDropdownWithDelay"
                        @focusin="openServicesDropdown"
                        @focusout="closeServicesDropdownWithDelay"
                    >
                        <button
                            class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 transition-colors duration-200 hover:text-blue-600"
                            aria-haspopup="true"
                            :aria-expanded="isServicesDropdownOpen"
                        >
                            Services
                            <svg
                                class="ml-1 h-4 w-4 transition-transform duration-200"
                                :class="{ 'rotate-180': isServicesDropdownOpen }"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </button>

                        <transition
                            enter-active-class="transition duration-200 ease-out"
                            enter-from-class="transform opacity-0 -translate-y-2"
                            enter-to-class="transform opacity-100 translate-y-0"
                            leave-active-class="transition duration-150 ease-in"
                            leave-from-class="transform opacity-100 translate-y-0"
                            leave-to-class="transform opacity-0 -translate-y-2"
                        >
                            <div
                                v-show="isServicesDropdownOpen"
                                class="absolute left-0 top-full z-50 mt-2 w-64 rounded-lg bg-white/95 shadow-lg ring-1 ring-black/5 backdrop-blur-sm"
                            >
                                <div class="space-y-1 py-2">
                                    <Link
                                        v-for="service in services"
                                        :key="service.title"
                                        :href="service.href"
                                        class="block px-4 py-2.5 text-sm text-gray-700 transition-colors duration-200 hover:bg-gray-50/80 hover:text-blue-600 focus:bg-gray-50/80 focus:outline-none"
                                        @click="closeAllMenus"
                                    >
                                        {{ service.title }}
                                    </Link>
                                </div>
                            </div>
                        </transition>
                    </div>

                    <Link
                        v-for="link in [
                            { href: '#about', text: 'À propos' },
                            { href: '#contact', text: 'Contact' },
                        ]"
                        :key="link.href"
                        :href="link.href"
                        class="px-3 py-2 text-sm font-medium text-gray-700 transition-colors duration-200 hover:text-blue-600 focus:underline focus:outline-none"
                    >
                        {{ link.text }}
                    </Link>

                    <Link
                        href="/contact"
                        class="ml-6 inline-flex items-center rounded-full border border-transparent bg-blue-600 px-6 py-2.5 text-sm font-medium text-white transition-all duration-200 hover:bg-blue-700 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2"
                    >
                        Nous contacter
                    </Link>
                </div>

                <!-- Bouton menu mobile -->
                <div class="flex items-center sm:hidden">
                    <button
                        @click="toggleMobileMenu"
                        class="rounded-lg p-2 text-gray-500 transition-colors duration-200 hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                        aria-label="Menu"
                        :aria-expanded="isMobileMenuOpen"
                    >
                        <svg
                            class="h-6 w-6 transition-transform"
                            :class="{ hidden: isMobileMenuOpen, block: !isMobileMenuOpen }"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            aria-hidden="true"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg
                            class="h-6 w-6 transition-transform"
                            :class="{ block: isMobileMenuOpen, hidden: !isMobileMenuOpen }"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            aria-hidden="true"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Menu mobile -->
        <transition
            enter-active-class="transition duration-200 ease-out"
            enter-from-class="transform opacity-0 -translate-y-4"
            enter-to-class="transform opacity-100 translate-y-0"
            leave-active-class="transition duration-150 ease-in"
            leave-from-class="transform opacity-100 translate-y-0"
            leave-to-class="transform opacity-0 -translate-y-4"
        >
            <div v-show="isMobileMenuOpen" class="bg-white/95 shadow-lg backdrop-blur-sm sm:hidden">
                <div class="space-y-1 pb-3 pt-2">
                    <Link
                        href="/"
                        class="block px-4 py-3 text-base font-medium text-gray-700 transition-colors duration-200 hover:bg-gray-50/80 hover:text-blue-600 focus:bg-gray-50/80 focus:outline-none"
                        @click="closeAllMenus"
                    >
                        Accueil
                    </Link>

                    <div>
                        <button
                            @click="isServicesDropdownOpen = !isServicesDropdownOpen"
                            class="flex w-full items-center justify-between px-4 py-3 text-base font-medium text-gray-700 transition-colors duration-200 hover:bg-gray-50/80 hover:text-blue-600 focus:bg-gray-50/80 focus:outline-none"
                            :aria-expanded="isServicesDropdownOpen"
                        >
                            Services
                            <svg
                                class="h-4 w-4 transition-transform duration-200"
                                :class="{ 'rotate-180': isServicesDropdownOpen }"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </button>

                        <transition
                            enter-active-class="transition duration-200 ease-out"
                            enter-from-class="transform opacity-0 -translate-y-2"
                            enter-to-class="transform opacity-100 translate-y-0"
                            leave-active-class="transition duration-150 ease-in"
                            leave-from-class="transform opacity-100 translate-y-0"
                            leave-to-class="transform opacity-0 -translate-y-2"
                        >
                            <div v-show="isServicesDropdownOpen" class="bg-gray-50/50">
                                <Link
                                    v-for="service in services"
                                    :key="service.title"
                                    :href="service.href"
                                    class="block px-8 py-3 text-base font-medium text-gray-700 transition-colors duration-200 hover:bg-gray-50/80 hover:text-blue-600 focus:bg-gray-50/80 focus:outline-none"
                                    @click="closeAllMenus"
                                >
                                    {{ service.title }}
                                </Link>
                            </div>
                        </transition>
                    </div>

                    <Link
                        v-for="link in [
                            { href: '#about', text: 'À propos' },
                            { href: '#contact', text: 'Contact' },
                        ]"
                        :key="link.href"
                        :href="link.href"
                        class="block px-4 py-3 text-base font-medium text-gray-700 transition-colors duration-200 hover:bg-gray-50/80 hover:text-blue-600 focus:bg-gray-50/80 focus:outline-none"
                        @click="closeAllMenus"
                    >
                        {{ link.text }}
                    </Link>
                </div>
            </div>
        </transition>
    </nav>
</template>
