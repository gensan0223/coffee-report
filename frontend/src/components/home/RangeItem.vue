<script setup>
defineProps({
    post: {
        default: 0,
    },
})
</script>
<template>
    <div class="flex items-center mb-5">
        <label for="default-range" class="inline-block w-20 text-left text-sm font-medium text-gray-900 dark:text-gray-300">
            <slot></slot>
        </label>
        <input id="default-range" step="5" type="range" :value="post" disabled class="flex-1 h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
    </div>
</template>
<style scoped lang="scss">
    @media screen and (-webkit-min-device-pixel-ratio: 0) {
        input[type="range"]::-webkit-slider-thumb {
            width: 15px;
            -webkit-appearance: none;
  			appearance: none;
            height: 15px;
            cursor: ew-resize;
            background: #9a3412;
            border-radius: 50%;
        }
    }
</style>
