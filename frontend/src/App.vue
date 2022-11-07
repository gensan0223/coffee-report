<script setup>
import Home from './layouts/Home.vue'

let message = 'Hello World';
const upperCase = () => {
  message = message.toUpperCase();
}

upperCase();
const link = 'https://google.com';
</script>

<template>
  <Home>
    <a class="active">google</a>
    <router-view></router-view>
  </Home>
</template>

<style>
  .active {
    color: red;
    font-weight: 900;
  }
</style>