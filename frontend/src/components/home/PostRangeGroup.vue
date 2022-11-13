<script setup>
import RangeItem from './RangeItem.vue'
defineProps({
    post: {
        default: 'test',
    },
})
</script>
<template>
    <div class="range-group">
        <RangeItem :post="post.range1">flavor1</RangeItem>
        <RangeItem :post="post.range2">flavor2</RangeItem>
        <RangeItem :post="post.range3">flavor3</RangeItem>
        <RangeItem :post="post.range4">flavor4</RangeItem>
    </div>
</template>