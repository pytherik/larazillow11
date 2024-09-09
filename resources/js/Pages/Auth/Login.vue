<script setup>
import { useForm } from '@inertiajs/vue3';
import AuthLayout from '@/Layouts/AuthLayout.vue';

const form = useForm({
  email: null,
  password: null,
});

const login = () => form.post(route('login.store'));
</script>

<template>
  <form @submit.prevent="login">
    <div class="w-1/3 mx-auto">
      <div>
        <label for="email" class="label">E-Mail</label>
        <input type="email" id="email" class="input" v-model="form.email" />
        <div class="input-error" v-if="form.errors.email">
          {{ form.errors.email }}
        </div>
      </div>
      <div>
        <label for="password" class="label mt-4">Passwort</label>
        <input
          type="password"
          id="password"
          class="input"
          v-model="form.password"
        />
        <div class="input-error" v-if="form.errors.password">
          {{ form.errors.password }}
        </div>
      </div>
      <div>
        <button type="submit" class="btn-primary w-full mt-4">
          Abschicken
        </button>
      </div>
    </div>
  </form>
</template>

<style scoped></style>
