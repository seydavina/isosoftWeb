<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";

// Email pour la newsletter
const email = ref("");
const subscriptionStatus = ref("");

// Fonction pour gérer l'inscription à la newsletter
const subscribeToNewsletter = () => {
  // Simulation d'envoi
  subscriptionStatus.value = "success";
  setTimeout(() => {
    subscriptionStatus.value = "";
    email.value = "";
  }, 3000);
};

const navigation = {
  solutions: [
    { name: "ISOPAIE", href: "/services/isopaie" },
    { name: "ISOIMMO", href: "/services/isoimmo" },
    { name: "ISOETATFIN", href: "/services/isoetatfin" },
    { name: "ISOBUDGET", href: "/services/isobudget" },
    { name: "ISOCOMPTA", href: "/services/isocompta" },
    { name: "ISOGESCOM", href: "/services/isogescom" },
    { name: "ISOGESCOLE", href: "/services/isogescole" },
    { name: "Autres Modules", href: "/services/autres-modules" },
  ],
  company: [
    { name: "À propos", href: "#about" },
    { name: "Équipe", href: "/team" },
  ],
  social: [
    {
      name: "LinkedIn",
      href: "#",
      icon: `<svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
          <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-.88-.06-1.601-1-1.601-1 0-1.16.781-1.16 1.601v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
      </svg>`,
    },
    {
      name: "Twitter",
      href: "#",
      icon: `<svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
          <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
      </svg>`,
    },
    {
      name: "GitHub",
      href: "#",
      icon: `<svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
          <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.91-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
      </svg>`,
    },
    {
      name: "Facebook",
      href: "#",
      icon: `<svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
          <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
      </svg>`,
    },
    {
      name: "Instagram",
      href: "#",
      icon: `<svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
          <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
      </svg>`,
    },
  ],
};

const contactInfo = {
  address: "Lotissement panoramique no 95\nLiberté 6 extension",
  phone: "+221 77 638 62 46",
  email: "issa.gueye@isosoft.sn",
};

// Obtenir l'année actuelle pour le copyright
const currentYear = new Date().getFullYear();
</script>

<template>
  <footer class="bg-gray-900 border-t border-gray-800" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="mx-auto max-w-7xl px-6 pb-8 pt-16 sm:pt-20 lg:px-8 lg:pt-24">
      <!-- Grid principale -->
      <div class="xl:grid xl:grid-cols-4 xl:gap-8">
        <!-- Colonne 1: Logo, description et contact -->
        <div class="space-y-8">
          <!-- Logo -->
          <div class="flex items-center">
            <div
              class="h-10 w-10 rounded-full bg-primary flex items-center justify-center text-white font-bold text-xl"
            >
              I
            </div>
            <span class="ml-3 text-xl font-bold text-white">ISOSOFT</span>
          </div>
          <!-- Description -->
          <p class="text-sm leading-6 text-gray-300">
            Votre partenaire technologique pour le développement de solutions digitales
            innovantes qui transforment votre activité.
          </p>
          <!-- Informations de contact -->
          <div class="space-y-2">
            <h3 class="text-sm font-semibold leading-6 text-white">Contact</h3>
            <address class="not-italic">
              <p class="text-sm leading-6 text-gray-300 whitespace-pre-line">
                {{ contactInfo.address }}
              </p>
            </address>
            <p class="text-sm leading-6 text-gray-300">
              <span class="block">Tél: {{ contactInfo.phone }}</span>
              <!-- Email cliquable -->
              <span class="block">
                Email:
                <a
                  :href="`mailto:${contactInfo.email}`"
                  class="text-primary hover:underline transition-colors duration-300"
                >
                  {{ contactInfo.email }}
                </a>
              </span>
            </p>
          </div>
        </div>
        <!-- Colonne 2: Nos Solutions -->
        <div class="mt-16 sm:mt-0 xl:col-span-1">
          <h3 class="text-sm font-semibold leading-6 text-white">Nos Solutions</h3>
          <ul role="list" class="mt-6 space-y-2">
            <li
              v-for="(item, index) in navigation.solutions"
              :key="index"
              class="text-sm"
            >
              <Link
                :href="item.href"
                class="text-gray-300 hover:text-white transition-colors duration-300"
              >
                {{ item.name }}
              </Link>
            </li>
          </ul>
        </div>
        <!-- Colonne 3: Entreprise et réseaux sociaux -->
        <div class="mt-10 md:mt-0 xl:col-span-1">
          <div>
            <h3 class="text-sm font-semibold leading-6 text-white">Entreprise</h3>
            <ul role="list" class="mt-6 space-y-2">
              <li
                v-for="(item, index) in navigation.company"
                :key="index"
                class="text-sm"
              >
                <Link
                  :href="item.href"
                  class="text-gray-300 hover:text-white transition-colors duration-300"
                >
                  {{ item.name }}
                </Link>
              </li>
            </ul>
          </div>
          <div class="mt-10">
            <h3 class="text-sm font-semibold leading-6 text-white">Suivez-nous</h3>
            <div class="mt-6 flex space-x-6">
              <a
                v-for="item in navigation.social"
                :key="item.name"
                :href="item.href"
                class="text-gray-400 hover:text-gray-300 transition-colors duration-300"
              >
                <span class="sr-only">{{ item.name }}</span>
                <div v-html="item.icon"></div>
              </a>
            </div>
          </div>
        </div>
        <!-- Colonne 4: Newsletter -->
        <div class="mt-10 xl:mt-0 xl:col-span-1">
          <div>
            <h3 class="text-sm font-semibold leading-6 text-white">
              Abonnez-vous à notre newsletter
            </h3>
            <p class="mt-2 text-sm leading-6 text-gray-300">
              Les dernières actualités et ressources, directement dans votre boîte mail.
            </p>
            <form
              @submit.prevent="subscribeToNewsletter"
              class="mt-6 sm:flex sm:max-w-md"
            >
              <label for="email-address" class="sr-only">Adresse email</label>
              <input
                type="email"
                name="email-address"
                id="email-address"
                v-model="email"
                autocomplete="email"
                required
                class="w-full appearance-none rounded-md border-0 bg-white/5 px-3 py-1.5 text-base text-white shadow-sm ring-1 ring-inset ring-white/10 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:w-full sm:text-sm"
                placeholder="Votre adresse email"
              />
              <div class="mt-4 sm:ml-4 sm:mt-0 sm:flex-shrink-0">
                <button
                  type="submit"
                  class="flex w-full items-center justify-center rounded-md bg-sky-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-sky-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary"
                >
                  S'abonner
                </button>
              </div>
            </form>
            <p
              v-if="subscriptionStatus === 'success'"
              class="mt-3 text-sm text-green-400"
            >
              Merci de vous être abonné !
            </p>
          </div>
        </div>
      </div>
      <!-- Ligne de séparation et copyright -->
      <div class="mt-16 border-t border-white/10 pt-8 sm:mt-20 lg:mt-24">
        <div class="flex flex-col md:flex-row justify-between items-center">
          <p class="text-xs leading-5 text-gray-400">
            &copy; {{ currentYear }} ISOSOFT. Tous droits réservés.
          </p>
          <p class="mt-4 md:mt-0 text-xs leading-5 text-gray-400">
            Développé avec passion au Sénégal
          </p>
        </div>
      </div>
    </div>
  </footer>
</template>

<style scoped>
/* Animation d'entrée simplifiée */
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
.space-y-8 > * {
  animation: fadeInUp 0.5s ease-out forwards;
}
a {
  position: relative;
}
a::after {
  content: "";
  position: absolute;
  width: 0;
  height: 1px;
  bottom: -2px;
  left: 0;
  background-color: currentColor;
  transition: width 0.3s ease;
}
a:hover::after {
  width: 100%;
}
/* Réduction de l'effet de pulsation pour un résultat plus discret */
button:hover {
  transform: scale(1.02);
  transition: transform 0.2s ease;
}
</style>
