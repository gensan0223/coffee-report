<script setup>
import { ref, onMounted, onUnmounted } from 'vue'
import { UserIcon, LogoutIcon } from '@heroicons/vue/outline'

const show = ref(false);
const root = ref(null);

const toggle = () => {
    show.value = !show.value;
};

const clickOutside = (e) => {
    if(!root.value.contains(e.target) && show.value) {
        console.log(e.target);
        show.value = false;
    }
}

onMounted(() => {
    document.addEventListener('click', clickOutside)
    console.log('mounted');
});
onUnmounted(() => {
    document.removeEventListener('click', clickOutside)
    console.log('unmounted');
});
</script>
<template>
    <div class="relative" ref="root">
        <img src="../assets/avatar.jpg" class="rounded-full w-10 h-10 cursor-pointer" @click="toggle" />
        <transition enter-active-class="transition-opacity duration-300" enter-from-class="opacity-0" leave-active-class="transition-opacity duration-300" leave-to-class="opacity-0">
            <div class="absolute top-16 right-0 z-10 w-40 py-2 bg-white rounded-sm shadow dark:bg-gray-800" v-show="show">
                <ul>
                    <li class="text-gray-700 dark:text-gray-300 hover:bg-blue-100 dark:hover:bg-gray-700 hover:text-blue-600 dark:hover:text-blue-600 p-2">
                        <router-link to="/profile" class="flex items-center space-x-2">
                            <UserIcon class="w-5 h-5"></UserIcon>
                            <span class="text-sm font-bold">プロファイル</span>
                        </router-link>
                    </li>
                    <li class="text-gray-700 dark:text-gray-300 hover:bg-blue-100 dark:hover:bg-gray-700 hover:text-blue-600 dark:hover:text-blue-600 p-2">
                        <a href="/#" class="flex items-center space-x-2">
                        <LogoutIcon class="w-5 h-5"></LogoutIcon>
                        <span class="text-sm font-bold">ログアウト</span>
                        </a>
                    </li>
                </ul>
            </div>
        </transition>
    </div>
</template>