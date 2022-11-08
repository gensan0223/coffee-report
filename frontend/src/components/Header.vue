<script setup>
    import logo from '../assets/logo.png';
</script>
<template>
    <div class="w-full fixed top-0 left-0 bg-yellow-800 flex">
        <router-link to="/home" class="">
            <!-- <component :is="icons[list.icon]" class="w-6 h-6 mr-2"></component>
            <span>{{ list.name }}</span> -->
            <img src="../assets/logo.png" class="w-24 h-12 object-cover" />
        </router-link>
    </div>
</template>