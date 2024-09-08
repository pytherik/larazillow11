<script setup>
import { computed } from 'vue';

const props = defineProps({
  price: [Number, String],
});

const formattedPrice = computed(() =>
  Number(props.price).toLocaleString('de-DE', {
    style: 'currency',
    currency: 'EUR',
  }),
);
</script>

<template>
  <span>{{ formattedPrice }}</span>
</template>

<style scoped></style>
