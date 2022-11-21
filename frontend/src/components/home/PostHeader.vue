<script setup>
import { UserCircleIcon } from '@heroicons/vue/solid'
const icons = {
    UserCircleIcon: UserCircleIcon,
}
</script>
<template>
    <div class="flex items-center space-x-4">
        <UserCircleIcon class="h-10"></UserCircleIcon>
        <!-- <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-5.jpg" alt=""> -->
        <div class="font-medium dark:text-white">
            <slot></slot>
            <div class="text-sm text-gray-500 dark:text-gray-400"><slot></slot></div>
        </div>
    </div>
</template>