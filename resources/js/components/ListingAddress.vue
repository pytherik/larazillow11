<script setup>
defineProps({
  listing: Object,
});
</script>

<template>
  <div>
    {{ listing.street }} {{ listing.street_nr }}, {{ listing.code }}
    {{ listing.city }}
  </div>
</template>
