<script setup>
import { Link } from '@inertiajs/inertia-vue3'
defineProps({
    users: Array,
});
</script>
<script>
import UserLayout from "@/Layouts/UserLayout.vue";

export default {
    layout: UserLayout,
};
</script>

<template>
    <h1>ユーザ一覧</h1>
    <div>
        <Link :href="route('user.create')" as="button" type="button">ユーザ登録</Link>
    </div>
    <ul>
        <li v-for="user in users" :key="user.id">{{ user.name }}</li>
    </ul>
</template>