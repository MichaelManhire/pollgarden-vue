<template>
    <component :is="element"
               class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 transition"
               :class="isLarge ? 'text-base' : 'text-sm'"
               :href="href"
               :type="type">
        <span class="-ml-1 mr-2 inline-block" :class="isLarge ? 'mr-3' : 'mr-2'">
            <slot name="icon" />
        </span>

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
            isLarge: {
                type: Boolean,
                default: false,
            },
            type: {
                type: String,
            },
        }
    }
</script>
