<template>
    <button class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md transition"
            :class="isSecondary ? 'text-indigo-700 bg-indigo-100 hover:bg-indigo-200' : 'text-white bg-indigo-600 hover:bg-indigo-700'"
            :type="type">
        <span class="-ml-1 mr-2 inline-block">
            <slot name="icon" />
        </span>

        <slot />
    </button>
</template>

<script>
    export default {
        props: {
            isSecondary: {
                type: Boolean,
                default: false,
            },
            type: {
                type: String,
                default: 'button',
            },
        }
    }
</script>
