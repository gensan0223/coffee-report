<script setup>
import Header from './PostHeader.vue';
defineProps({
    post: {
        default: 'test',
    },
})
</script>
<template>
    <p class="mb-3 font-normal break-words text-gray-700 dark:text-gray-400">
        <slot></slot>
    </p>
</template>