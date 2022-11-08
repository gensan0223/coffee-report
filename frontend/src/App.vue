<script setup>
import Home from './layouts/Home.vue'

</script>

<template>
  <Home>
    <router-view />
  </Home>
</template>

<style>
  .active {
    color: red;
    font-weight: 900;
  }
</style>