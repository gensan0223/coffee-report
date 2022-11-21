import { defineStore } from 'pinia';
import { ref } from 'vue';
import axios from 'axios';

export const usePostRanges = defineStore('posts', () => {
    const posts = ref([]);
    const getPosts = () => {
        axios.get('http://localhost/api/posts')
        .then((response) => {
            posts.value = response.data;
            console.log(posts);
        })
        .catch(error => console.log(error))
    }

    return { posts, getPosts };
});
