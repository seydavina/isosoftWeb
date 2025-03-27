<script setup lang="ts">
import { useForm } from "@inertiajs/vue3";

const form = useForm({
  name: "",
  email: "",
  phone: "", // Remis le champ téléphone
});

const submit = () => {
  form.post(route("newsletter.subscribe"), {
    onSuccess: () => {
      form.reset();
    },
  });
};

const contactItems = [
  {
    title: "Suivez-nous",
    content: "Sur les réseaux sociaux pour plus d'actualités",
    icon: `<svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd" d="M10 3c-4.31 0-8 3.033-8 7 0 2.024.978 3.825 2.499 5.085a3.478 3.478 0 01-.522 1.756.75.75 0 00.584 1.143 5.976 5.976 0 003.936-1.108c.487.082.99.124 1.503.124 4.31 0 8-3.033 8-7s-3.69-7-8-7zm0 8a1 1 0 100-2 1 1 0 000 2zm-2-1a1 1 0 11-2 0 1 1 0 012 0zm5 1a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
    </svg>`,
  },
  {
    title: "Email",
    content: "issa.gueye@isosoft.sn",
    icon: `<svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
      <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
      <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
    </svg>`,
  },
  {
    title: "Fréquence",
    content: "Newsletter mensuelle avec nos meilleures actualités",
    icon: `<svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
    </svg>`,
  },
];
</script>

<template>
  <div
    id="newsletter"
    class="relative isolate overflow-hidden bg-gradient-to-b from-blue-50 to-blue-200 py-24 sm:py-32"
  >
    <!-- Éléments décoratifs SVG -->
    <div class="absolute inset-0 -z-10 overflow-hidden">
      <svg
        class="absolute right-0 top-0 h-[64rem] w-[64rem] -translate-y-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]"
        aria-hidden="true"
      >
        <defs>
          <pattern
            id="newsletter-pattern"
            x="0"
            y="0"
            width="20"
            height="20"
            patternUnits="userSpaceOnUse"
          >
            <path
              d="M-5 25h30v-30h-30z"
              fill="none"
              stroke="currentColor"
              stroke-width="1"
              class="text-gray-200/20"
            />
          </pattern>
        </defs>
        <rect
          width="100%"
          height="100%"
          stroke-width="0"
          fill="url(#newsletter-pattern)"
        />
      </svg>

      <div
        class="absolute left-1/2 top-0 -z-10 -translate-x-1/2 blur-3xl xl:-top-6"
        aria-hidden="true"
      >
        <div
          class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-primary to-primary-dark opacity-20"
          style="
            clip-path: polygon(
              74.1% 44.1%,
              100% 61.6%,
              97.5% 26.9%,
              85.5% 0.1%,
              80.7% 2%,
              72.5% 32.5%,
              60.2% 62.4%,
              52.4% 68.1%,
              47.5% 58.3%,
              45.2% 34.5%,
              27.5% 76.7%,
              0.1% 64.9%,
              17.9% 100%,
              27.6% 76.8%,
              76.1% 97.7%,
              74.1% 44.1%
            );
          "
        ></div>
      </div>
    </div>

    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl lg:text-center">
        <h2
          class="text-base text-cyan-600 font-semibold leading-7 text-primary tracking-wide uppercase"
        >
          Newsletter
        </h2>
        <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl bg-clip-text text-transparent bg-gradient-to-r from-cyan-600 to-blue-600">
          Restez informé de nos actualités
        </p>
        <p class="mt-6 text-lg leading-8 text-gray-600">
          Inscrivez-vous à notre newsletter pour recevoir nos dernières nouvelles, mises à
          jour et offres spéciales directement dans votre boîte de réception.
        </p>
      </div>
      <form @submit.prevent="submit" class="mx-auto mt-16 max-w-xl sm:mt-20">
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
          <div class="form-group">
            <label for="name" class="block text-sm font-semibold leading-6 text-gray-900"
              >Prénom</label
            >
            <div class="mt-2.5">
              <input
                type="text"
                name="name"
                id="name"
                v-model="form.name"
                required
                class="block w-full rounded-lg border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6 transition-all duration-300 hover:ring-gray-400"
                placeholder="Comment pouvons-nous vous appeler ?"
              />
            </div>
          </div>
          <div class="form-group">
            <label for="email" class="block text-sm font-semibold leading-6 text-gray-900"
              >Email</label
            >
            <div class="mt-2.5">
              <input
                type="email"
                name="email"
                id="email"
                v-model="form.email"
                required
                class="block w-full rounded-lg border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6 transition-all duration-300 hover:ring-gray-400"
                placeholder="Votre adresse email"
              />
            </div>
          </div>
          <!-- Champ téléphone remis -->
          <!-- <div class="form-group sm:col-span-2">
            <label for="phone" class="block text-sm font-semibold leading-6 text-gray-900"
              >Téléphone (optionnel)</label
            >
            <div class="mt-2.5">
              <input
                type="tel"
                name="phone"
                id="phone"
                v-model="form.phone"
                class="block w-full rounded-lg border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6 transition-all duration-300 hover:ring-gray-400"
                placeholder="Votre numéro de téléphone (pour les alertes SMS)"
              />
            </div>
          </div> -->
          <div class="sm:col-span-2">
            <div class="flex items-start">
              <div class="flex h-6 items-center">
                <input
                  id="privacy"
                  name="privacy"
                  type="checkbox"
                  required
                  class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary"
                />
              </div>
              <div class="ml-3 text-sm">
                <label for="privacy" class="font-medium text-gray-700"
                  >J'accepte de recevoir la newsletter</label
                >
                <p class="text-gray-500">
                  Vous pouvez vous désabonner à tout moment en cliquant sur le lien en bas
                  de nos emails.
                </p>
              </div>
            </div>
          </div>
          <!-- Bouton submit avec visibilité améliorée -->
          <div class="sm:col-span-2 mt-4">
            <button
              type="submit"
              :disabled="form.processing"
              class="group relative block max-w-80 rounded-lg bg-gradient-to-b from-blue-500 to-cyan-300 px-3.5 py-2.5 text-center text-sm text-white"
            >
              <span class="relative z-10">
                <span v-if="form.processing">Envoi en cours...</span>
                <span v-else>Envoyer le message</span>
              </span>
              <div class="absolute inset-0 rounded-lg bg-gradient-to-r from-primary to-primary-dark opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </button>
          </div>
        </div>
      </form>
      <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
        <dl
          class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3"
        >
          <div
            v-for="(item, index) in contactItems"
            :key="item.title"
            class="flex flex-col group"
            :style="{ animationDelay: `${index * 0.1}s` }"
          >
            <dt
              class="flex items-center gap-x-3 text-base font-semibold leading-7 text-gray-900"
            >
              <div
                v-html="item.icon"
                class="h-5 w-5 flex-none text-primary group-hover:scale-110 transition-transform duration-300"
              ></div>
              {{ item.title }}
            </dt>
            <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600">
              <p class="flex-auto">{{ item.content }}</p>
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

.form-group {
  opacity: 0;
  animation: fadeIn 0.6s ease-out forwards;
}

.form-group:nth-child(1) {
  animation-delay: 0.1s;
}
.form-group:nth-child(2) {
  animation-delay: 0.2s;
}
.form-group:nth-child(3) {
  animation-delay: 0.3s;
}

.group {
  opacity: 0;
  animation: fadeIn 0.6s ease-out forwards;
}

/* Effet de survol sur les champs de formulaire */
.form-group input:focus,
.form-group textarea:focus {
  transform: translateY(-2px);
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
}

/* Animation pour le bouton d'abonnement */
@keyframes pulse {
  0%,
  100% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.02);
  }
}

button:hover:not(:disabled) {
  animation: pulse 2s infinite;
}

/* Amélioration de la visibilité du bouton */
button[type="submit"] {
  font-size: 1rem;
  font-weight: 600;
  border: none;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

button[type="submit"]:hover {
  box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
  transform: translateY(-1px);
}

/* Message de confirmation */
.success-message {
  background-color: #dcfce7;
  border-left: 4px solid #22c55e;
  padding: 1rem;
  margin-top: 1rem;
  border-radius: 0.375rem;
  opacity: 0;
  animation: fadeIn 0.5s ease-out forwards 0.2s;
}
</style>
