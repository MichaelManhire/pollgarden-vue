<template>
    <div>
        <div>
            <label class="mb-1 block font-medium text-gray-700" :class="{ 'sr-only': hasHiddenLabel }" :for="id">{{ label }}</label>
        </div>
        <div>
            <input class="hidden" :id="id" :name="name" type="file" :required="required" accept="image/*" :aria-describedby="id + '-description'">

            <secondary-button type="button">
                <template v-slot:icon>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                    </svg>
                </template>

                <template v-slot:default>
                    Upload Image
                </template>
            </secondary-button>
        </div>
        <p class="mt-2 text-sm text-gray-500" :id="id + '-description'">Uploading an image is optional. If you do, it'll appear next to your poll's title.</p>
    </div>
</template>

<script>
    import SecondaryButton from '@/Shared/SecondaryButton'

    export default {
        components: {
            SecondaryButton,
        },

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
            required: {
                type: Boolean,
                default: false,
            },
        },
    }
</script>
