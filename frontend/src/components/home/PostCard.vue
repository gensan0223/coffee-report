<script setup>
import PostHeader from './PostHeader.vue';
import PostText from './PostText.vue';
import PostRangeGroup from './PostRangeGroup.vue';
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
    <div class="hover:bg-gray-100 dark:hover:bg-gray-800 border-b p-4">
        <PostHeader>{{ post.user.name }}</PostHeader>
        <div class="flex flex-col justify-between p-4 pl-10 leading-normal">
            <PostText>{{ post.text }}</PostText>
            <PostRangeGroup :post="post"></PostRangeGroup>
        </div>
    </div>
</template>