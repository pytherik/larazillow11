<script setup>
import ListingAddress from '@/components/ListingAddress.vue';
import Price from '@/components/Price.vue';
import ListingSpace from '@/components/ListingSpace.vue';
import Box from '@/components/UI/Box.vue';
import { ref } from 'vue';
import { useMonthlyPayment } from '@/Composables/useMonthlyPayment.js';

const { listing } = defineProps({
  listing: Object,
});

const interestRate = ref(2.5);
const duration = ref(25);

const { monthlyPayment, totalInterest, totalPaid } = useMonthlyPayment(
  listing.price,
  interestRate,
  duration,
);
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
        <template #header>Höhe der monatlichen Raten:</template>
        <div>
          <label class="label">Zinsen ({{ interestRate }}%)</label>
          <input
            v-model.number="interestRate"
            class="w-full h-4 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-500"
            max="30"
            min="0.1"
            step="0.1"
            type="range"
          />
          <label class="label">Laufzei ({{ duration }} Jahre)</label>
          <input
            v-model.number="duration"
            type="range"
            min="3"
            max="35"
            step="1"
            class="w-full h-4 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-500"
          />
          <div class="text-gray-600 dark:text-gray-300 mt-2">
            Ihre monatliche Rate
          </div>
          <Price :price="monthlyPayment" class="text-3xl" />
        </div>
        <div class="mt-2 text-gray-400">
          <div class="flex justify-between">
            <div>Effektiver Preis:</div>
            <div>
              <Price class="font-medium" :price="totalPaid" />
            </div>
          </div>
        </div>
        <div class="mt-2 text-gray-400">
          <div class="flex justify-between">
            <div>Gelisteter Preis:</div>
            <div>
              <Price class="font-medium" :price="listing.price" />
            </div>
          </div>
        </div>
        <div class="mt-2 text-gray-400">
          <div class="flex justify-between">
            <div>Effektiver Zins:</div>
            <div>
              <Price class="font-medium" :price="totalInterest" />
            </div>
          </div>
        </div>
      </Box>
    </div>
  </div>
</template>

<style scoped></style>
