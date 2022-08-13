<script setup>
const emit = defineEmits(['notification']);
const sendNotification = () => {
    emit('notification');
}
</script>

<template>
    <h2>子コンポーネント</h2>
    <button @click="sendNotification">通知</button>
</template>