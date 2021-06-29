<template>
    <select class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 rounded-md">
        <option v-for="option in options" :value="option.value" :key="option.value">{{ option.name }}</option>
    </select>
</template>

<script>
    export default {
        props: {
            options: {
                type: Array,
                required: true,
            },
        },
    }
</script>
