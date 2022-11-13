<script setup>
    import BottomNavigation from '../components/BottomNavigation.vue'
    import Header from '../components/Header.vue'
</script>
<template>
    <Header />
    <BottomNavigation />
    <div class="pt-12">
        <slot />
    </div>
</template>