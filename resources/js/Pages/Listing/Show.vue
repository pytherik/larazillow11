<script setup>
import ListingAddress from '@/components/ListingAddress.vue';
import Price from '@/components/Price.vue';
import ListingSpace from '@/components/ListingSpace.vue';
import Box from '@/components/UI/Box.vue';

defineProps({
  listing: Object,
});
</script>

<template>
  <div class="flex flex-col-reverse mb-4 md:grid md:grid-cols-12 md:gap-4">
    <Box class="md:col-span-7 flex items-center w-full">
      <div class="w-full text-center font-medium text-gray-400">Image</div>
    </Box>
    <div class="md:col-span-5 flex flex-col gap-4">
      <Box>
        <template #header>Basisinformation</template>
        <Price :price="listing.price" class="text-2xl font-bold" />
        <ListingSpace :listing="listing" class="text-lg" />
        <ListingAddress :listing="listing" class="text-gray-400" />
      </Box>
      <Box>
        <template #header>Angebot</template>
        Machen Sie ein Angebot!
      </Box>
    </div>
  </div>
</template>

<style scoped></style>
