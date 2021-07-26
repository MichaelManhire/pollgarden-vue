<template>
    <nav class="mt-8 flex items-center justify-between" aria-label="Pagination">
        <a v-if="prevPageUrl"
           :href="prevPageUrl"
           class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-700">
            <svg class="mr-3 text-gray-400" width="20" height="20" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            Previous
        </a>

        <a v-if="nextPageUrl"
           :href="nextPageUrl"
           class="ml-auto inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-700">
            Next
            <svg class="ml-3 text-gray-400" width="20" height="20" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </a>
    </nav>
</template>

<script>
    export default {
        props: {
            nextPageUrl: {
                type: String,
            },
            prevPageUrl: {
                type: String,
            },
        }
    }
</script>
