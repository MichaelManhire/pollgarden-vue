<template>
    <p class="text-sm text-gray-500">
        Posted by <inertia-link class="hover:text-gray-600 hover:underline" :href="memberUrl">{{ member }}</inertia-link> <time :title="time">{{ timeForHumans }}</time>.
    </p>
</template>

<script>
    export default {
        props: {
            member: {
                type: String,
                required: true,
            },
            memberUrl: {
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
