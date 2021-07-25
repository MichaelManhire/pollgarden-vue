<template>
    <panel element="li" class="mt-6 hover:bg-gray-50 transition cursor-pointer" @click="goToPoll">
        <div class="flex">
            <div class="flex-shrink-0">
                <rounded-image />
            </div>
            <div class="flex-1 pl-4 md:grid md:grid-cols-2 md:gap-4">
                <div>
                    <h2>
                        <inertia-link class="text-lg font-medium text-indigo-600 hover:text-indigo-700 hover:underline"
                                      :href="route('polls.show', slug)">
                            {{ title }}
                        </inertia-link>
                    </h2>
                    <byline class="mt-2" :author="author" :time="time" :time-for-humans="timeForHumans" />
                </div>

                <div class="flex md:inline-block items-center md:items-start mt-3 md:mt-0">
                    <dl>
                        <dt class="sr-only">Category</dt>
                        <dd>
                            <badge :color="categoryColor">{{ category }}</badge>
                        </dd>
                    </dl>

                    <dl class="md:mt-3 ml-3 md:ml-0 flex">
                        <dt class="sr-only">Votes</dt>
                        <dd class="inline-flex items-center text-sm font-medium text-gray-500" title="22 votes">
                            <svg class="mr-1 h-5 w-5" width="20" height="20" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                            </svg>
                            {{ votesCount }}
                        </dd>

                        <dt class="sr-only">Comments</dt>
                        <dd class="ml-3 inline-flex items-center text-sm font-medium text-gray-500" title="6 comments">
                            <svg class="mr-1 h-5 w-5" width="20" height="20" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                            </svg>
                            {{ commentsCount }}
                        </dd>

                        <dt class="sr-only">Hearts</dt>
                        <dd class="ml-3 inline-flex items-center text-sm font-medium text-gray-500" title="8 hearts">
                            <svg class="mr-1 h-5 w-5" width="20" height="20" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                            </svg>
                            {{ heartsCount }}
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </panel>
</template>

<script>
    import Badge from '@/Shared/Badge'
    import Byline from '@/Shared/Byline'
    import Panel from '@/Shared/Panel'
    import RoundedImage from '@/Shared/RoundedImage'

    export default {
        components: {
            Badge,
            Byline,
            Panel,
            RoundedImage,
        },

        props: {
            author: {
                type: String,
                required: true,
            },
            category: {
                type: String,
                required: true,
            },
            categoryColor: {
                type: String,
                required: true,
            },
            commentsCount: {
                type: Number,
                required: true,
            },
            heartsCount: {
                type: Number,
                required: true,
            },
            slug: {
                type: String,
                required: true,
            },
            time: {
                type: String,
                required: true,
            },
            timeForHumans: {
                type: String,
                required: true,
            },
            title: {
                type: String,
                required: true,
            },
            votesCount: {
                type: Number,
                required: true,
            },
        },

        methods: {
            goToPoll(event) {
                const href = this.href;
                const tag = event.target.tagName.toLowerCase();

                if (tag !== 'a') {
                    window.location.href = href;
                }
            },
        },
    }
</script>
