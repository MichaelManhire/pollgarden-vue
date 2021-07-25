<template>
    <p class="text-sm text-gray-500">
        Posted by <inertia-link class="hover:text-gray-600 hover:underline" href="">{{ author }}</inertia-link> <time :title="time">{{ timeForHumans }}</time>.
    </p>
</template>

<script>
    export default {
        props: {
            author: {
                type: String,
                required: true,
            },
            time: {
                type: String,
                required: true,
            },
            timeForHumans: {
                type: String,
                required: true,
            },
        }
    }
</script>
