<script setup>
import RangeItem from './RangeItem.vue'
defineProps({
    post: {
        default: 0,
    },
})
</script>
<template>
    <div class="range-group">
        <RangeItem :post="post.range1">香り</RangeItem>
        <RangeItem :post="post.range2">酸味</RangeItem>
        <RangeItem :post="post.range3">苦味</RangeItem>
        <RangeItem :post="post.range4">後味</RangeItem>
    </div>
</template>