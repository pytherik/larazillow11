<script setup>
import { Link } from '@inertiajs/vue3';
import Price from '@/components/Price.vue';
import Box from '@/components/UI/Box.vue';
import ListingAddress from '@/components/ListingAddress.vue';
import ListingSpace from '@/components/ListingSpace.vue';
import { useMonthlyPayment } from '@/Composables/useMonthlyPayment.js';

const { listing } = defineProps({
  listing: Object,
});

const { monthlyPayment } = useMonthlyPayment(listing.price, 2.5, 25);
</script>

<template>
  <Box>
    <div>
      <Link :href="route('listing.show', { listing: listing.id })">
        <div class="flex items-center gap-3">
          <Price :price="listing.price" class="text-2xl font-bold" />
          <div class="text-xs text-gray-400">
            <Price :price="monthlyPayment" />
            /Monat
          </div>
        </div>
        <ListingSpace :listing="listing" class="text-lg" />
        <ListingAddress :listing="listing" class="text-gray-400" />
      </Link>
    </div>
    <div>
      <Link :href="route('listing.edit', { listing: listing.id })">Ändern </Link
      >&nbsp;|&nbsp;
      <Link
        :href="route('listing.destroy', { listing: listing.id })"
        method="delete"
        >Löschen
      </Link>
    </div>
  </Box>
</template>

<style scoped></style>
