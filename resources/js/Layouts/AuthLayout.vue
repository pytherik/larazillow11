<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
  <header
    class="border-b border-gray-200 bg-white dark:bg-gray-800 dark:border-gray-400 w-full"
  >
    <div class="container mx-auto">
      <nav class="p-4 flex items-center justify-between">
        <div class="text-lg font-medium">
          <Link :href="route('login')">Login</Link>
        </div>
        <div class="font-bold text-2xl text-indigo-600 dark:text-indigo-300">
          Larazillow
        </div>
        <div>
          <Link :href="route('login')">Anmeldung</Link>
        </div>
      </nav>
    </div>
  </header>
  <main class="container mx-auto p-4 w-full">
    <slot></slot>
  </main>
</template>

<style scoped></style>
