<template>
    <div v-show="showContent" id="overlay" class="z-10 fixed top-0 left-0 w-full h-full bg-black opacity-50 flex items-center justify-center">
        <div id="content" class="x-20 w-6/12 p-4 bg-white">
            <p>modal window</p>
            <p><button v-on:click="closeModal">close</button></p>
        </div>
    </div>
</template>