<script setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';

const timer = ref('');

const getTime = () => {
  const date = new Date();
  const h = `0${date.getHours()}`.slice(-2);
  const m = `0${date.getMinutes()}`.slice(-2);
  const s = `0${date.getSeconds()}`.slice(-2);
  timer.value = `${h}:${m}:${s}`;
};

setInterval(() => getTime(), 1000);
</script>

<template>
  <div>
    <nav>
      <div>Ungefähre Uhrzeit: {{ timer }}</div>
      <Link href="/">Home</Link>&nbsp;|&nbsp;
      <Link href="/show">Show</Link>
    </nav>
    <slot></slot>
  </div>
</template>

<style scoped></style>
