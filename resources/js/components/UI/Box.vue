<script setup></script>

<template>
  <div
    class="p-4 border border-gray-200 dark:border-gray-500 rounded-md shadow-sm"
  >
    <div class="text-gray-400 font-medium mb-1">
      <slot name="header"></slot>
    </div>
    <slot></slot>
  </div>
</template>

<style scoped></style>
