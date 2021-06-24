<template>
    <section class="md:flex md:items-center md:justify-between">
        <div class="flex-1 min-w-0">
            <h1 class="text-2xl font-bold leading-7 sm:text-3xl">Polls</h1>
        </div>

        <div class="mt-4 flex justify-between md:justify-start md:mt-0 md:ml-4">
            <form class="inline-flex items-center">
                <label class="sr-only md:not-sr-only text-sm font-medium text-gray-500" for="category">Category:</label>
                <select class="md:ml-3 block w-full pl-3 pr-10 py-2 text-base border-gray-300 rounded-md transition" id="category" name="category">
                    <option>Random</option>
                    <option>Entertainment</option>
                    <option>Food</option>
                    <option>Life Experiences</option>
                    <option>Politics</option>
                    <option>Relationships</option>
                    <option>Science & Tech</option>
                </select>
                <button class="sr-only" type="submit">Apply Filter</button>
            </form>

            <inertia-link class="ml-8 inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 transition" :href="route('polls.create')">
                <svg class="-ml-1 mr-2 h-5 w-5" width="20" height="20" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                New Poll
            </inertia-link>
        </div>
    </section>

    <section class="mt-8">
        <ol>
            <panel element="li">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <rounded-image />
                    </div>
                    <div class="flex-1 pl-4 md:grid md:grid-cols-2 md:gap-4">
                        <div>
                            <h2>
                                <inertia-link class="text-lg font-medium text-indigo-600 hover:text-indigo-700 hover:underline transition" :href="route('polls.show')">
                                    What is your favorite color?
                                </inertia-link>
                            </h2>
                            <p class="mt-2 text-sm text-gray-500">Posted by <inertia-link class="hover:text-gray-600 hover:underline transition" href="/members/michael">Michael</inertia-link> <time>6 months ago</time>.</p>
                        </div>
                        <div class="flex md:inline-block items-center md:items-start mt-3 md:mt-0">
                            <dl>
                                <dt class="sr-only">Category</dt>
                                <dd>
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">Random</span>
                                </dd>
                            </dl>
                            <dl class="md:mt-3 ml-3 md:ml-0 flex">
                                <dt class="sr-only">Votes</dt>
                                <dd class="inline-flex items-center text-sm font-medium text-gray-500" title="22 votes">
                                    <svg class="mr-1 h-5 w-5" width="20" height="20" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                                    </svg>
                                    22
                                </dd>
                                <dt class="sr-only">Comments</dt>
                                <dd class="ml-3 inline-flex items-center text-sm font-medium text-gray-500" title="6 comments">
                                    <svg class="mr-1 h-5 w-5" width="20" height="20" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                                    </svg>
                                    6
                                </dd>
                                <dt class="sr-only">Hearts</dt>
                                <dd class="ml-3 inline-flex items-center text-sm font-medium text-gray-500" title="8 hearts">
                                    <svg class="mr-1 h-5 w-5" width="20" height="20" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                    </svg>
                                    8
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </panel>
        </ol>
    </section>
</template>

<script>
    import Panel from '@/Shared/Panel'
    import RoundedImage from '@/Shared/RoundedImage'

    export default {
        components: {
            Panel,
            RoundedImage,
        },
    }
</script>
