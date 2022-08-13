<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import { useForm } from "@inertiajs/inertia-vue3";

function submit() {
    form.post("/user", {
        onError: () => form.reset(),
    });
}

const form = useForm({
    email: null,
    password: null,
    remember: false,
});

</script>
<script>
import UserLayout from "@/Layouts/UserLayout.vue";

export default {
    layout: UserLayout,
};
</script>
<template>
    <Head title="ユーザの登録"></Head>
    <h1>ユーザの登録</h1>
    <div>
        <form @submit.prevent="submit">
            <div>
                <label for="name">名前:</label>
                <input id="name" v-model="form.name" />
                <div v-if="form.errors.name">{{ form.errors.name }}</div>
            </div>
            <div>
                <label for="email">メールアドレス:</label>
                <input id="email" v-model="form.email" />
                <div v-if="form.errors.email">{{ form.errors.email }}</div>
            </div>
            <div>
                <label for="password">パスワード:</label>
                <input id="password" v-model="form.password" type="password" />
                <div v-if="form.errors.password">{{ form.errors.password }}</div>
            </div>
            <button type="submit" :disabled="form.processing">Submit</button>
        </form>
    </div>
</template>