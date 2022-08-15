<script setup>
import CompA from './components/CompA.vue';
import { provide, ref } from 'vue';

const count = ref(0);

const addCount = () => {
  count.value++;
};

provide('count', {
  count,
  addCount,
});
</script>

<template>
  <h1>Vue 3 入門</h1>
  <CompA message="propsでデータ渡し" />
</template>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
