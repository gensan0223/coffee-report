<script>
import axios from 'axios';
import { ref, reactive,onMounted } from 'vue';


const Product = {
    setup() {
        const users = ref([]);
        onMounted(() => {
            axios.get('/api/posts')
                .then(resposne => (users.value = response.data))
                .catch(error => console.log(error))
            ;
        })
        return {
            users,
        };
    }
}
</script>
<template>
    <div class="pt-12">
        <div>商品一覧</div>
        <ul>
            <li v-for="user in users">{{ user.name }}</li>
        </ul>
    </div>
</template>