<script setup lang="ts">
import { useForm } from "@inertiajs/vue3";

const form = useForm({
  name: "",
  email: "",
  phone: "",
  subject: "", // Ajout du sujet
  message: "", // Ajout du message
});

const submit = () => {
  form.post(route("contact.send"), {
    onSuccess: () => {
      form.reset();
    },
  });
};

</script>

<template>
  <div
    id="contact"
    class="relative isolate overflow-hidden bg-gradient-to-b from-blue-50 to-blue-200 py-24 sm:py-32"
  >
    <!-- Éléments décoratifs SVG restent identiques -->
    <div class="absolute inset-0 -z-10 overflow-hidden">
      <!-- ... (garder le même code SVG) ... -->
    </div>

    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl lg:text-center">
        <h2
          class="text-base text-cyan-600 font-semibold leading-7 tracking-wide uppercase"
        >
          Contactez-nous
        </h2>
        <p
          class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl bg-clip-text text-transparent bg-gradient-to-r from-cyan-600 to-blue-600"
        >
          Nous sommes à votre écoute
        </p>
        <p class="mt-6 text-lg leading-8 text-gray-600">
          Vous avez des questions ? N'hésitez pas à nous contacter. Notre équipe sera
          ravie de vous aider.
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
                placeholder="Votre nom complet"
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
          <div class="form-group sm:col-span-2">
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
                placeholder="Votre numéro de téléphone"
              />
            </div>
          </div>
          <div class="form-group sm:col-span-2">
            <label
              for="subject"
              class="block text-sm font-semibold leading-6 text-gray-900"
              >Sujet</label
            >
            <div class="mt-2.5">
              <input
                type="text"
                name="subject"
                id="subject"
                v-model="form.subject"
                required
                class="block w-full rounded-lg border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6 transition-all duration-300 hover:ring-gray-400"
                placeholder="Le sujet de votre message"
              />
            </div>
          </div>
          <div class="form-group sm:col-span-2">
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
                placeholder="Votre message"
              ></textarea>
            </div>
          </div>
          <div class="sm:col-span-2 mt-4">
            <button
              type="submit"
              :disabled="form.processing"
              class="group relative block w-full rounded-lg bg-gradient-to-b from-blue-500 to-cyan-300 px-3.5 py-2.5 text-center text-sm text-white"
            >
              <span class="relative z-10">
                <span v-if="form.processing">Envoi en cours...</span>
                <span v-else>Envoyer le message</span>
              </span>
              <div
                class="absolute inset-0 rounded-lg bg-gradient-to-r from-primary to-primary-dark opacity-0 group-hover:opacity-100 transition-opacity duration-300"
              ></div>
            </button>
          </div>
        </div>
      </form>
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
.form-group:nth-child(4) {
  animation-delay: 0.4s;
}
.form-group:nth-child(5) {
  animation-delay: 0.5s;
}

.group {
  opacity: 0;
  animation: fadeIn 0.6s ease-out forwards;
}

.form-group input:focus,
.form-group textarea:focus {
  transform: translateY(-2px);
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
}

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

button[type="submit"] {
  font-size: 1rem;
  font-weight: 600;
  border: none;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  width: 100%;
}

button[type="submit"]:hover {
  box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
  transform: translateY(-1px);
}

.success-message {
  background-color: #dcfce7;
  border-left: 4px solid #22c55e;
  padding: 1rem;
  margin-top: 1rem;
  border-radius: 0.375rem;
  opacity: 0;
  animation: fadeIn 0.5s ease-out forwards 0.2s;
}

textarea {
  resize: vertical;
  min-height: 100px;
}
</style>
