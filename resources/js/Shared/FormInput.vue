<template>
    <div>
        <div class="flex justify-between">
            <label class="mb-1 block font-medium text-gray-700" :class="{ 'sr-only': hasHiddenLabel }" :for="id">{{ label }}</label>
        </div>
        <div>
            <input class="shadow-sm block w-full border-gray-300 rounded-md transition" :id="id" :name="name" :type="type" :placeholder="placeholder" :required="required">
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
            placeholder: {
                type: String,
            },
            required: {
                type: Boolean,
                default: false,
            },
            type: {
                type: String,
                default: 'text',
            },
        },
    }
</script>
