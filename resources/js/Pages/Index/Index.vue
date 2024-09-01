<script setup>
defineProps({
  message: String,
});
</script>

<template>
  <div>
    <h1>Inertia creeps! {{ $props.message }}</h1>
  </div>
</template>
