<template>
    <form class="inline-flex items-center">
        <label class="sr-only md:not-sr-only text-sm font-medium text-gray-500" :for="id">{{ label }}</label>

        <select class="md:ml-3 block w-full pl-3 pr-10 py-2 text-base border-gray-300 rounded-md transition" :id="id" :name="name">
            <option v-for="option in options" :value="option.value" :key="option.value">{{ option.name }}</option>
        </select>

        <button class="sr-only" type="submit">Apply Filter</button>
    </form>
</template>

<script>
    export default {
        props: {
            id: {
                type: String,
                required: true,
            },
            label: {
                type: String,
                required: true,
            },
            name: {
                type: String,
                required: true,
            },
            options: {
                type: Array,
                required: true,
            },
        }
    }
</script>
