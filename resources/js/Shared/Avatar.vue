<template>
    <div class="inline-block relative">
        <rounded-image :src="src" :alt="alt" :width="width" :height="height" />
        <span class="absolute bottom-0 right-0 transform translate-y-1/2 translate-x-1/2 block border-2 border-white rounded-full">
            <span class="block h-4 w-4 rounded-full"
                  :class="isOnline ? 'bg-green-400' : 'bg-gray-300'"
                  :title="isOnline ? 'Online' : 'Offline'">
                <span class="sr-only">{{ isOnline ? 'Online' : 'Offline' }}</span>
            </span>
        </span>
    </div>
</template>

<script>
    import RoundedImage from '@/Shared/RoundedImage'

    export default {
        components: {
            RoundedImage,
        },

        props: {
            alt: {
                type: String,
                default: '',
            },
            height: {
                type: Number,
                default: 64,
            },
            isOnline: {
                type: Boolean,
                default: false,
            },
            src: {
                type: String,
                default: 'https://via.placeholder.com/200x200',
            },
            width: {
                type: Number,
                default: 64,
            },
        }
    }
</script>
