<script setup>
import { Link } from '@inertiajs/vue3';
import ListingAddress from '@/components/ListingAddress.vue';
import Box from '@/components/UI/Box.vue';
import ListingSpace from '@/components/ListingSpace.vue';
import Price from '@/components/Price.vue';

defineProps({
  listings: Array,
});
</script>

<template>
  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
    <Box v-for="listing in listings" :key="listing.id">
      <div>
        <Link :href="route('listing.show', { listing: listing.id })">
          <Price :price="listing.price" class="text-2xl font-bold" />
          <ListingSpace :listing="listing" class="text-lg" />
          <ListingAddress :listing="listing" class="text-gray-400" />
        </Link>
      </div>
      <div>
        <Link :href="route('listing.edit', { listing: listing.id })"
          >Ändern</Link
        >&nbsp;|&nbsp;
        <Link
          :href="route('listing.destroy', { listing: listing.id })"
          method="delete"
          >Löschen</Link
        >
      </div>
    </Box>
  </div>
</template>

<style scoped></style>
