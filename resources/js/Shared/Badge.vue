<template>
    <p class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium" :class="'bg-' + color + '-100 text-' + color + '-800'">
        <slot />
    </p>
</template>

<script>
    export default {
        props: {
            color: {
                type: String,
                required: true,
            },
        },
    }
</script>
