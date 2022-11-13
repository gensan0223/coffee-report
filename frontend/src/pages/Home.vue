<script setup>
import axios from 'axios';
import { ref, onMounted } from 'vue';
import PostCard from '../components/home/PostCard.vue';

const posts = ref([]);
onMounted(() => {
    axios.get('http://localhost:3001/posts')
        .then((response) => {
            posts.value = response.data;
        })
        .catch(error => console.log(error))
    ;
});
</script>
<template>
    <ul>
        <li v-for="post in posts">
            <PostCard :post="post" />
        </li>
    </ul>
</template>