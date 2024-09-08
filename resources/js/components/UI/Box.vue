<script setup></script>

<template>
  <div
    class="p-4 border border-gray-200 dark:border-gray-500 rounded-md shadow-sm"
  >
    <div class="text-gray-500 font-medium"><slot name="header"></slot></div>
    <slot></slot>
  </div>
</template>

<style scoped></style>
