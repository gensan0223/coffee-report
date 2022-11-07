<script>
import axios from 'axios';
import { ref, reactive,onMounted } from 'vue';

const users = ref([]);

const Product = {
    setup() {
        onMounted(() => {
            console.log(users);
        })
    }
}
</script>
<template>
    <div>商品一覧</div>
    <ul>
    </ul>
</template>