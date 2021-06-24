<template>
    <component :is="element"
               class="bg-white overflow-hidden shadow rounded-lg"
               :class="{ 'divide-y divide-gray-200': hasHeader || hasFooter }">
        <div v-if="hasHeader" class="px-4 py-5 sm:p-6">
            <slot name="header" />
        </div>

        <div class="px-4 py-5 sm:px-6">
            <slot />
        </div>

        <div v-if="hasFooter" class="px-4 py-5 sm:p-6">
            <slot name="footer" />
        </div>
    </component>
</template>

<script>
    export default {
        props: {
            element: {
                type: String,
                default: 'div',
            },
            hasFooter: {
                type: Boolean,
                default: false,
            },
            hasHeader: {
                type: Boolean,
                default: false,
            },
        }
    }
</script>
