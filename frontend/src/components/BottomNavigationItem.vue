<script setup>
import { HomeIcon as HomeOutlineIcon, SearchIcon as SearchOutlineIcon, PlusCircleIcon as PlusCircleOutlineIcon, BellIcon as BellOutlineIcon, UserIcon as UserOutlineIcon } from '@heroicons/vue/outline'
import { HomeIcon as HomeSolidIcon, SearchIcon as SearchSolidIcon, PlusCircleIcon as PlusCircleSolidIcon, BellIcon as BellSolidIcon, UserIcon as UserSolidIcon } from '@heroicons/vue/solid'
import { reactive, computed } from 'vue';
import { useRoute } from 'vue-router';

const lists = reactive([
    {
        name: 'home',
        outlineIcon: 'HomeOutlineIcon',
        solidIcon: 'HomeSolidIcon',
        link: '/home',
    },
    // {
    //     name: 'search',
    //     outlineIcon: 'SearchOutlineIcon',
    //     solidIcon: 'SearchSolidIcon',
    //     link: '/search',
    // },
    {
        name: 'add',
        outlineIcon: 'PlusCircleOutlineIcon',
        solidIcon: 'PlusCircleSolidIcon',
        link: '/add',
    },
    // {
    //     name: 'notification',
    //     outlineIcon: 'BellOutlineIcon',
    //     solidIcon: 'BellSolidIcon',
    //     link: '/notification',
    // },
    {
        name: 'profile',
        outlineIcon: 'UserOutlineIcon',
        solidIcon: 'UserSolidIcon',
        link: '/profile',
    },
]);

const icons = {
    HomeOutlineIcon: HomeOutlineIcon,
    SearchOutlineIcon: SearchOutlineIcon,
    PlusCircleOutlineIcon: PlusCircleOutlineIcon,
    BellOutlineIcon: BellOutlineIcon,
    UserOutlineIcon: UserOutlineIcon,
    HomeSolidIcon: HomeSolidIcon,
    SearchSolidIcon: SearchSolidIcon,
    PlusCircleSolidIcon: PlusCircleSolidIcon,
    BellSolidIcon: BellSolidIcon,
    UserSolidIcon: UserSolidIcon,
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
    <div class="mb-1" v-for="list in lists" :key="list.name">
        <router-link :to="list.link" class="items-center block p-2">
            <component v-if="currentRoute === list.link" :is="icons[list.solidIcon]" class="w-6 h-6"></component>
            <component v-else :is="icons[list.outlineIcon]" class="w-6 h-6"></component>
        </router-link>
    </div>
</template>
<style scoped>
.v-enter-active,
.v-leave-active {
    transition: height 0.3s;
}
</style>