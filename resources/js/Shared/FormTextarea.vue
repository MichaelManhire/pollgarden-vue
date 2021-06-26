<template>
    <div>
        <div class="flex justify-between">
            <label class="mb-1 block font-medium text-gray-700" :class="{ 'sr-only': hasHiddenLabel }" :for="id">{{ label }}</label>
        </div>
        <div>
            <textarea class="shadow-sm block w-full border-gray-300 rounded-md transition" :id="id" :name="name" :placeholder="placeholder" :required="required" rows="5"></textarea>
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
        }
    }
</script>
