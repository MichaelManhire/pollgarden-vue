<template>
    <img class="rounded-md" :src="src" :alt="alt" :width="width" :height="height" loading="lazy">
</template>

<script>
    export default {
        props: {
            alt: {
                type: String,
                default: '',
            },
            height: {
                type: Number,
                default: 64,
            },
            src: {
                type: String,
                default: 'https://via.placeholder.com/200x200',
            },
            width: {
                type: Number,
                default: 64,
            },
        }
    }
</script>
