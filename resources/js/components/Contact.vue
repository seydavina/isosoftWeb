<script setup lang="ts">
import { useForm } from "@inertiajs/vue3";

const form = useForm({
  name: "",
  email: "",
  phone: "",
  company: "",
  message: "",
});

const submit = () => {
  form.post(route("contact.send"), {
    onSuccess: () => {
      form.reset();
    },
  });
};

const contactItems = [
  {
    title: 'Adresse',
    content: 'Lotissement panoramique no 95\nLiberté 6 extension',
    icon: `<svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd" d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z" clip-rule="evenodd" />
    </svg>`
  },
  {
    title: 'Téléphone',
    content: '+221 77 638 62 46',
    icon: `<svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
      <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
    </svg>`
  },
  {
    title: 'Email',
    content: 'issa.gueye@isosoft.sn',
    icon: `<svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
      <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
      <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
    </svg>`
  }
];
</script>

<template>
  <div id="contact" class="relative isolate overflow-hidden bg-white py-24 sm:py-32">
    <!-- Éléments décoratifs SVG -->
    <div class="absolute inset-0 -z-10 overflow-hidden">
      <svg class="absolute right-0 top-0 h-[64rem] w-[64rem] -translate-y-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]" aria-hidden="true">
        <defs>
          <pattern id="contact-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
            <path d="M-5 25h30v-30h-30z" fill="none" stroke="currentColor" stroke-width="1" class="text-gray-200/20" />
          </pattern>
        </defs>
        <rect width="100%" height="100%" stroke-width="0" fill="url(#contact-pattern)" />
      </svg>
      
      <div class="absolute left-1/2 top-0 -z-10 -translate-x-1/2 blur-3xl xl:-top-6" aria-hidden="true">
        <div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-primary to-primary-dark opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
    </div>

    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl lg:text-center">
        <h2 class="text-base font-semibold leading-7 text-primary tracking-wide uppercase">Contact</h2>
        <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
          Discutons de votre projet
        </p>
        <p class="mt-6 text-lg leading-8 text-gray-600">
          Contactez-nous pour une démonstration de nos solutions ou pour discuter de vos
          besoins spécifiques.
        </p>
      </div>
      <form @submit.prevent="submit" class="mx-auto mt-16 max-w-xl sm:mt-20">
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
          <div class="form-group">
            <label for="name" class="block text-sm font-semibold leading-6 text-gray-900"
              >Nom complet</label
            >
            <div class="mt-2.5">
              <input
                type="text"
                name="name"
                id="name"
                v-model="form.name"
                required
                class="block w-full rounded-lg border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6 transition-all duration-300 hover:ring-gray-400"
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
              />
            </div>
          </div>
          <div class="form-group">
            <label for="phone" class="block text-sm font-semibold leading-6 text-gray-900"
              >Téléphone</label
            >
            <div class="mt-2.5">
              <input
                type="tel"
                name="phone"
                id="phone"
                v-model="form.phone"
                class="block w-full rounded-lg border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6 transition-all duration-300 hover:ring-gray-400"
              />
            </div>
          </div>
          <div class="form-group">
            <label
              for="company"
              class="block text-sm font-semibold leading-6 text-gray-900"
              >Entreprise</label
            >
            <div class="mt-2.5">
              <input
                type="text"
                name="company"
                id="company"
                v-model="form.company"
                class="block w-full rounded-lg border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6 transition-all duration-300 hover:ring-gray-400"
              />
            </div>
          </div>
          <div class="sm:col-span-2">
            <label
              for="message"
              class="block text-sm font-semibold leading-6 text-gray-900"
              >Message</label
            >
            <div class="mt-2.5">
              <textarea
                name="message"
                id="message"
                rows="4"
                v-model="form.message"
                required
                class="block w-full rounded-lg border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6 transition-all duration-300 hover:ring-gray-400"
              ></textarea>
            </div>
          </div>
          <div class="sm:col-span-2">
            <button
              type="submit"
              :disabled="form.processing"
              class="group relative block w-full rounded-lg bg-primary px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-primary-dark focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary transition-all duration-300 hover:shadow-lg"
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
          <div v-for="(item, index) in contactItems" :key="item.title" 
               class="flex flex-col group"
               :style="{ animationDelay: `${index * 0.1}s` }">
            <dt
              class="flex items-center gap-x-3 text-base font-semibold leading-7 text-gray-900"
            >
              <div v-html="item.icon" class="h-5 w-5 flex-none text-primary group-hover:scale-110 transition-transform duration-300"></div>
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

.form-group:nth-child(1) { animation-delay: 0.1s; }
.form-group:nth-child(2) { animation-delay: 0.2s; }
.form-group:nth-child(3) { animation-delay: 0.3s; }
.form-group:nth-child(4) { animation-delay: 0.4s; }
.form-group:nth-child(5) { animation-delay: 0.5s; }
.form-group:nth-child(6) { animation-delay: 0.6s; }

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
</style>
