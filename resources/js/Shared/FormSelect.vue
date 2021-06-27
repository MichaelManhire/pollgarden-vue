<template>
    <div>
        <div class="flex justify-between">
            <label class="mb-2 block font-medium text-gray-700" :class="{ 'sr-only': hasHiddenLabel }" :for="id">{{ label }}</label>
        </div>
        <div>
            <select class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 rounded-md" :id="id" :name="name" :required="required">
                <option v-for="option in options" :value="option.value" :key="option.value">{{ option.name }}</option>
            </select>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            hasHiddenLabel: {
                type: Boolean,
                default: false,
            },
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
            required: {
                type: Boolean,
                default: false,
            },
        },
    }
</script>
