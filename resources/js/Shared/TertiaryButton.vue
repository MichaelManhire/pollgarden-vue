<template>
    <component :is="element" class="text-sm font-medium text-indigo-600 hover:text-indigo-700 hover:underline" :href="href" :type="type">
        <slot />
    </component>
</template>

<script>
    export default {
        props: {
            element: {
                type: String,
                default: 'button',
            },
            href: {
                type: String,
            },
            type: {
                type: String,
            },
        }
    }
</script>
