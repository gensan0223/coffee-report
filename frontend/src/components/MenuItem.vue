<script setup>
import { HomeIcon, SearchIcon, PlusCircleIcon, BellIcon, UserIcon } from '@heroicons/vue/outline'
import { reactive, computed } from 'vue';
import { useRoute } from 'vue-router';

const lists = reactive([
    {
        name: 'home',
        icon: 'HomeIcon',
        link: '/home',
    },
    {
        name: 'search',
        icon: 'SearchIcon',
        link: '/search',
    },
    {
        name: 'add',
        icon: 'PlusCircleIcon',
        link: '/add',
    },
    {
        name: 'notification',
        icon: 'BellIcon',
        link: '/notification',
    },
    {
        name: 'profile',
        icon: 'UserIcon',
        link: '/profile',
    },
]);

const icons = {
    HomeIcon: HomeIcon,
    SearchIcon: SearchIcon,
    PlusCircleIcon: PlusCircleIcon,
    BellIcon: BellIcon,
    UserIcon: UserIcon,
};

const toggle = (name) => {
    const list = lists.find((list) => list.name === name);
    list.show = !list.show;
};

const enter = (element) => {
    element.style.height = "auto";
    const height = getComputedStyle(element).height;
    element.style.height = 0;
    getComputedStyle(element);
    setTimeout(() => {
        element.style.height = height;
    });
};

const leave = (element) => {
    element.style.height = getComputedStyle(element).height;
    getComputedStyle(element);
    setTimeout(() => {
        element.style.height = 0;
    });
};

const currentRoute = computed(() => {
  return useRoute().fullPath;
});
</script>
<template>
    <ul class="text-gray-700 dark:text-gray-300">
        <li class="mb-1" v-for="list in lists" :key="list.name">
            <router-link :to="list.link" class="flex items-center block p-2 rounded-sm hover:text-white hover:bg-blue-400" :class="{ 'bg-blue-600 text-white': currentRoute === list.link, }">
                <component :is="icons[list.icon]" class="w-6 h-6 mr-2"></component>
                <span>{{ list.name }}</span>
            </router-link>
        </li>
    </ul>
</template>
<style scoped>
.v-enter-active,
.v-leave-active {
    transition: height 0.3s;
}
</style>