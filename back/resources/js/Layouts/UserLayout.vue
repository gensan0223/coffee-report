<script setup>
import NavBar from '@/Components/NavBar.vue';
import { Head } from "@inertiajs/inertia-vue3";
</script>
<template>
    <header>
        <Head title="my app" />
        <h1>User</h1>
        <NavBar />
    </header>
    <main>
        <slot />
    </main>
</template>
