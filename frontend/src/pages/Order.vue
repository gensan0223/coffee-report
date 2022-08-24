<style scoped>
    .drilldown-parent {
        display: block;
        position: relative;
    }
    .drilldown-child {
        display: none;
        position: absolute;
        top: 0;
        left: 0;
    }
    .active {
        display: block;
    }
</style>
<template>
    <div>注文一覧</div>
    <div id="drilldown" class="">
        <ul>
            <li class="drilldown-parent"><a href="#">test A</a>
                <ul class="drilldown-child">
                    <li>←back</li>
                    <li>test AA</li>
                    <li>test AB</li>
                    <li>test AC</li>
                </ul>
            </li>
            <li class="drilldown-parent"><a href="#">test B</a>
            <ul class="drilldown-child">
                <li>←back</li>
                <li>test BA</li>
                <li>test BB</li>
                <li>test BC</li>
            </ul>
            </li>
            <li class="drilldown-parent"><a href="#">test C</a>
            <ul class="drilldown-child">
                <li>←back</li>
                <li>test CA</li>
                <li>test CB</li>
                <li>test CC</li>
            </ul>
            </li>
        </ul>
    </div>

<div>test</div>
</template>
<script>
const parent = document.querySelectorAll('.drilldown-parent')
const child = document.querySelectorAll('.drilldown-child');

parent.forEach(function(element) {
    console.log(element);
    element.addEventListener('click', () => {
        element.classList.add('active');
    })
})

</script>