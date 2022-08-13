<script setup>
defineProps({
    greeting: String,
});
import { Head } from "@inertiajs/inertia-vue3";
</script>
<script>
import Layout from "../Layouts/Layout.vue";
export default {
    layout: Layout,
};
</script>
<template>
    <Head title="Welcomeページ" />
    <h1>{{ greeting }} Inertia.js</h1>
</template>