<script setup>
import { Link, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';

const page = usePage();
const successMessage = computed(() => page.props.flash.success);
</script>

<template>
  <header
    class="border-b border-gray-200 bg-white dark:bg-gray-800 dark:border-gray-400 w-full"
  >
    <div class="container mx-auto">
      <nav class="p-4 flex items-center justify-between">
        <div class="text-lg font-medium">
          <Link :href="route('listing.index')">Einträge</Link>
        </div>
        <div class="font-bold text-2xl text-indigo-600 dark:text-indigo-300">
          <Link :href="route('listing.index')">Larazillow</Link>
        </div>
        <div>
          <Link :href="route('listing.create')" class="btn-primary"
            >+ Neuer Eintrag</Link
          >
        </div>
      </nav>
    </div>
  </header>
  <main class="container mx-auto p-4">
    <div
      class="mb-4 p-2 border rounded-md shadow-sm border-green-200 dark:border-green-800 bg-green-50 dark:bg-green-900"
      v-if="successMessage"
    >
      {{ successMessage }}
    </div>
    <slot></slot>
  </main>
</template>

<style scoped></style>
