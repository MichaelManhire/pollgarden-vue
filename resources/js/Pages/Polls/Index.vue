<template>
    <section class="md:flex md:items-center md:justify-between">
        <div class="flex-1 min-w-0">
            <page-title>Polls</page-title>
        </div>

        <div class="mt-4 flex justify-between md:justify-start md:mt-0 md:ml-4">
            <poll-filter label="Category:" id="category" name="category" :options="[
                {
                    name: 'Random',
                    value: 'random',
                },
                {
                    name: 'Entertainment',
                    value: 'entertainment',
                },
                {
                    name: 'Food',
                    value: 'food',
                },
                {
                    name: 'Life Experiences',
                    value: 'life-experiences',
                },
                {
                    name: 'Politics',
                    value: 'politics',
                },
                {
                    name: 'Relationships',
                    value: 'relationships',
                },
                {
                    name: 'Science & Tech',
                    value: 'science-tech',
                },
            ]" />

            <div class="ml-8">
                <primary-button element="inertia-link" :href="route('polls.create')">
                    <template v-slot:icon>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </template>

                    <template v-slot:default>
                        New Poll
                    </template>
                </primary-button>
            </div>
        </div>
    </section>

    <section class="mt-8">
        <ol>
            <poll-listing v-for="poll in polls.data"
                          :key="poll.id"
                          :slug="poll.slug"
                          :title="poll.title"
                          :time="poll.time"
                          :timeForHumans="poll.timeForHumans"
                          :author="poll.author"
                          :category="poll.category"
                          :categoryColor="poll.categoryColor"
                          :votesCount="poll.votesCount"
                          :commentsCount="poll.commentsCount"
                          :heartsCount="poll.heartsCount" />
        </ol>
    </section>
</template>

<script>
    import PollFilter from '@/Shared/PollFilter'
    import PollListing from '@/Shared/PollListing'
    import PageTitle from '@/Shared/PageTitle'
    import PrimaryButton from '@/Shared/PrimaryButton'

    export default {
        components: {
            PollFilter,
            PollListing,
            PageTitle,
            PrimaryButton,
        },

        props: {
            polls: {
                type: Object,
                required: true,
            },
        }
    }
</script>
