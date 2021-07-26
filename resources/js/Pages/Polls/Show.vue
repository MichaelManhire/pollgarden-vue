<template>
    <panel element="section" has-header has-footer>
        <template v-slot:header>
            <media-object>
                <template v-slot:media>
                    <rounded-image />
                </template>

                <template v-slot:default>
                    <page-title>{{ title }}</page-title>
                    <byline class="mt-2" :author="author" author-url="" :time="time" :time-for-humans="timeForHumans" />

                    <ul class="mt-2">
                        <li class="inline-block">
                            <tertiary-button element="inertia-link" href="/polls/edit">Edit</tertiary-button>
                        </li>
                        <li class="ml-3 inline-block">
                            <tertiary-button type="button">Delete</tertiary-button>
                        </li>
                    </ul>
                </template>
            </media-object>
        </template>

        <template v-slot:default>
            <ballot-box :title="title" :options="[
                {
                    id: 0,
                    name: 'Red',
                    color: '#a3d9a5',
                    votesCount: '20 votes',
                    votesPercentage: '20%',
                },
                {
                    id: 1,
                    name: 'Blue',
                    color: '#cfbcf2',
                    votesCount: '40 votes',
                    votesPercentage: '40%',
                },
                {
                    id: 2,
                    name: 'Green',
                    color: '#f9da8b',
                    votesCount: '15 votes',
                    votesPercentage: '15%',
                },
                {
                    id: 3,
                    name: 'Purple',
                    color: '#a4cafe',
                    votesCount: '15 votes',
                    votesPercentage: '15%',
                },
                {
                    id: 4,
                    name: 'Yellow',
                    color: '#f8b4d9',
                    votesCount: '10 votes',
                    votesPercentage: '10%',
                },
            ]"></ballot-box>
        </template>

        <template v-slot:footer>
            <div class="flex">
                <dl>
                    <dt class="sr-only">Category</dt>
                    <dd class="inline-block">
                        <badge :color="categoryColor">{{ category }}</badge>
                    </dd>
                </dl>

                <dl class="ml-auto flex">
                    <dt class="sr-only">Votes</dt>
                    <dd class="inline-flex items-center text-gray-500">
                        <svg class="mr-1" width="20" height="20" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                        </svg>
                        <button class="text-sm font-medium hover:text-gray-600 hover:underline" type="button" aria-label="View voters">{{ votes.length }}</button>
                    </dd>

                    <dt class="sr-only">Comments</dt>
                    <dd class="ml-3 inline-flex items-center text-gray-500">
                        <svg class="mr-1" width="20" height="20" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                        </svg>
                        <a class="text-sm font-medium hover:text-gray-600 hover:underline" href="#comments" aria-label="Go to comments">{{ comments.length }}</a>
                    </dd>

                    <dt class="sr-only">Hearts</dt>
                    <dd class="ml-3 inline-flex items-center text-gray-500">
                        <form class="mr-1 h-5 w-5">
                            <button class="hover:text-rose-600 transition" type="submit">
                                <svg class="h-5 w-5" width="20" height="20" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Heart This Poll</span>
                            </button>
                        </form>
                        <button class="text-sm font-medium hover:text-gray-600 hover:underline" type="button" aria-label="View hearts">{{ hearts.length }}</button>
                    </dd>
                </dl>

                <form class="ml-3 inline-flex items-center">
                    <button class="text-sm font-medium text-gray-500 hover:text-gray-600 hover:underline" type="submit">Withdraw</button>
                </form>
            </div>
        </template>
    </panel>

    <section class="mt-12" id="comments">
        <h2 class="text-xl sm:text-2xl font-bold leading-7">Comments</h2>

        <form class="mt-4">
            <form-label class="sr-only">Comment</form-label>
            <form-textarea id="comment" name="body" placeholder="Leave a comment here..." required />

            <div class="flex justify-end mt-4">
                <primary-button type="submit">
                    <template v-slot:icon>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </template>

                    <template v-slot:default>
                        Post Comment
                    </template>
                </primary-button>
            </div>
        </form>

        <ol class="mt-6">
            <comment v-for="comment in comments"
                     :key="comment.id"
                     :body="comment.body"
                     :time="comment.time"
                     :timeForHumans="comment.timeForHumans"
                     :author="comment.author"
                     :replies="comment.replies"
                     :hearts="comment.hearts" />
        </ol>
    </section>

    <!--
    <aside class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
                <div class="hidden sm:block absolute top-0 right-0 pt-4 pr-4">
                    <button type="button" class="bg-white rounded-md text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <span class="sr-only">Close</span>
                        <svg class="h-6 w-6" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div>
                    <ol class="divide-y divide-gray-200">
                        <li class="py-6 flex">
                            <img class="rounded-md w-16 h-16" src="https://via.placeholder.com/200x200" alt="" width="64" height="64" loading="lazy">
                            <div class="ml-3">
                                <dl>
                                    <dt class="sr-only">Member</dt>
                                    <dd class="mb-2 font-medium text-gray-900">Michael</dd>
                                    <dt class="sr-only">Voted for</dt>
                                    <dd class="inline-flex items-center text-sm font-medium text-gray-500">
                                        <svg class="mr-1 h-5 w-5" width="20" height="20" viewBox="0 0 20 20" fill="currentColor" style="color: #cfbcf2;">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        Red
                                    </dd>
                                    <dt class="sr-only">Time</dt>
                                    <dd class="ml-3 inline-flex items-center text-sm font-medium text-gray-500">
                                        <svg class="mr-1 h-5 w-5" width="20" height="20" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                        </svg>
                                        <time>5 months ago</time>
                                    </dd>
                                </dl>
                            </div>
                        </li>

                        <li class="py-6 flex">
                            <img class="rounded-md w-16 h-16" src="https://via.placeholder.com/200x200" alt="" width="64" height="64" loading="lazy">
                            <div class="ml-3">
                                <dl>
                                    <dt class="sr-only">Member</dt>
                                    <dd class="mb-2 font-medium text-gray-900">Elly</dd>
                                    <dt class="sr-only">Voted for</dt>
                                    <dd class="inline-flex items-center text-sm font-medium text-gray-500">
                                        <svg class="mr-1 h-5 w-5" width="20" height="20" viewBox="0 0 20 20" fill="currentColor" style="color: #a3d9a5;">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        Blue
                                    </dd>
                                    <dt class="sr-only">Time</dt>
                                    <dd class="ml-3 inline-flex items-center text-sm font-medium text-gray-500">
                                        <svg class="mr-1 h-5 w-5" width="20" height="20" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                        </svg>
                                        <time>5 months ago</time>
                                    </dd>
                                </dl>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </aside>
    -->
</template>

<script>
    import Avatar from '@/Shared/Avatar'
    import Badge from '@/Shared/Badge'
    import BallotBox from '@/Shared/BallotBox'
    import Byline from '@/Shared/Byline'
    import Comment from '@/Shared/Comment'
    import FormLabel from '@/Shared/FormLabel'
    import FormTextarea from '@/Shared/FormTextarea'
    import MediaObject from '@/Shared/MediaObject'
    import PageTitle from '@/Shared/PageTitle'
    import Panel from '@/Shared/Panel'
    import PrimaryButton from '@/Shared/PrimaryButton'
    import RoundedImage from '@/Shared/RoundedImage'
    import TertiaryButton from '@/Shared/TertiaryButton'

    export default {
        components: {
            Avatar,
            Badge,
            BallotBox,
            Byline,
            Comment,
            FormLabel,
            FormTextarea,
            MediaObject,
            PageTitle,
            Panel,
            PrimaryButton,
            RoundedImage,
            TertiaryButton,
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
        },
    }
</script>
