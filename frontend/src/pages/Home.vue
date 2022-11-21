<script setup>
import { onMounted } from 'vue';
import { storeToRefs } from 'pinia';
import { usePostRanges } from '../stores/postRanges';
import PostCard from '../components/home/PostCard.vue';

const { posts } = storeToRefs(usePostRanges());
const { getPosts } = usePostRanges();

onMounted(() => {
    getPosts();
});
defineProps({
    post: {
        default: {
            range1: 0,
            range2: 0,
            range3: 0,
            range4: 0,
            text: '',
            user: {
                name: '',
            }
        },
    },
})
</script>
<template>
    <ul>
        <li v-for="post in posts" :key="post.id">
            <PostCard :post="post" />
        </li>
    </ul>
</template>