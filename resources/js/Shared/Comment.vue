<template>
    <li>
        <panel has-footer>
            <template v-slot:default>
                <media-object>
                    <template v-slot:media>
                        <avatar />
                    </template>

                    <template v-slot:default>
                        <p>{{ body }}</p>
                    </template>
                </media-object>
            </template>

            <template v-slot:footer>
                <div class="flex">
                    <dl class="flex">
                        <dt class="sr-only">Author</dt>
                        <dd class="inline-flex items-center text-sm font-medium text-gray-500">
                            <svg class="mr-1 h-5 w-5" width="20" height="20" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                            </svg>
                            {{ author }}
                        </dd>

                        <dt class="sr-only">Time</dt>
                        <dd class="ml-3 inline-flex items-center text-sm font-medium text-gray-500">
                            <svg class="mr-1 h-5 w-5" width="20" height="20" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                            </svg>
                            <time :title="time">{{ timeForHumans }}</time>
                        </dd>
                    </dl>

                    <dl class="ml-auto flex">
                        <dt class="sr-only">Replies</dt>
                        <dd class="ml-3 inline-flex items-center text-sm font-medium text-gray-500">
                            <svg class="mr-1 h-5 w-5" width="20" height="20" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                            </svg>
                            {{ replies.length }}
                        </dd>

                        <dt class="sr-only">Hearts</dt>
                        <dd class="ml-3 inline-flex items-center text-sm font-medium text-gray-500">
                            <form class="mr-1 h-5 w-5">
                                <button class="hover:text-rose-600 transition" type="submit">
                                    <svg class="h-5 w-5" width="20" height="20" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only">Heart This Comment</span>
                                </button>
                            </form>
                            <span>{{ hearts.length }}</span>
                        </dd>
                    </dl>

                    <button class="ml-3 inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-600 hover:underline" type="button">Reply</button>
                </div>
            </template>
        </panel>

        <!-- Reply Form -->

        <!-- List of Replies -->
    </li>
</template>

<script>
    import Avatar from '@/Shared/Avatar'
    import MediaObject from '@/Shared/MediaObject'
    import Panel from '@/Shared/Panel'

    export default {
        components: {
            Avatar,
            MediaObject,
            Panel,
        },
    }
</script>
