<script setup>
import { counter } from '../store/countStore';
</script>
<template>
    <h3>CompB Component</h3>
    <p>Count: {{ counter.count }}</p>
    <button @click="counter.addCount">+</button>
</template>