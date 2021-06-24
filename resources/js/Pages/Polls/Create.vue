<template>
    <panel element="section">
        <h1 class="text-2xl font-bold leading-7 sm:text-3xl">Create a Poll</h1>

        <form class="mt-6">
            <div>
                <div class="flex justify-between">
                    <label class="block font-medium text-gray-700" for="title">Title</label>
                </div>
                <div class="mt-1">
                    <input class="shadow-sm block w-full border-gray-300 rounded-md transition" id="title" name="title" type="text">
                </div>
            </div>

            <fieldset class="mt-8">
                <legend class="block font-medium text-gray-700">Options</legend>

                <div>
                    <label class="sr-only" for="option0">Option 1</label>
                    <div class="mt-3">
                        <input class="shadow-sm block w-full border-gray-300 rounded-md transition" id="option0" name="options[0]" type="text" placeholder="Option 1">
                    </div>
                </div>

                <div>
                    <label class="sr-only" for="option0">Option 2</label>
                    <div class="mt-3">
                        <input class="shadow-sm block w-full border-gray-300 rounded-md transition" id="option1" name="options[1]" type="text" placeholder="Option 2">
                    </div>
                </div>

                <div style="display: none;">
                    <label class="sr-only" for="option0">Option 3</label>
                    <div class="mt-3">
                        <input class="shadow-sm block w-full border-gray-300 rounded-md transition" id="option2" name="options[2]" type="text" placeholder="Option 3">
                    </div>
                </div>

                <div style="display: none;">
                    <label class="sr-only" for="option0">Option 4</label>
                    <div class="mt-3">
                        <input class="shadow-sm block w-full border-gray-300 rounded-md transition" id="option3" name="options[3]" type="text" placeholder="Option 4">
                    </div>
                </div>

                <div style="display: none;">
                    <label class="sr-only" for="option0">Option 5</label>
                    <div class="mt-3">
                        <input class="shadow-sm block w-full border-gray-300 rounded-md transition" id="option4" name="options[4]" type="text" placeholder="Option 5">
                    </div>
                </div>

                <div style="display: none;">
                    <label class="sr-only" for="option0">Option 6</label>
                    <div class="mt-3">
                        <input class="shadow-sm block w-full border-gray-300 rounded-md transition" id="option5" name="options[5]" type="text" placeholder="Option 6">
                    </div>
                </div>

                <div style="display: none;">
                    <label class="sr-only" for="option0">Option 7</label>
                    <div class="mt-3">
                        <input class="shadow-sm block w-full border-gray-300 rounded-md transition" id="option6" name="options[6]" type="text" placeholder="Option 7">
                    </div>
                </div>

                <div style="display: none;">
                    <label class="sr-only" for="option0">Option 8</label>
                    <div class="mt-3">
                        <input class="shadow-sm block w-full border-gray-300 rounded-md transition" id="option7" name="options[7]" type="text" placeholder="Option 8">
                    </div>
                </div>

                <div class="flex justify-end mt-3">
                    <button class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 transition" type="button">
                        <svg class="-ml-1 mr-2 h-5 w-5" width="20" height="20" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        Add Option
                    </button>
                </div>
            </fieldset>

            <div class="mt-8">
                <div class="flex justify-between">
                    <label class="block font-medium text-gray-700" for="category">Category</label>
                </div>
                <div class="mt-1">
                    <select class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 rounded-md" id="category" name="category">
                        <option>Random</option>
                        <option>Entertainment</option>
                        <option>Food</option>
                        <option>Life Experiences</option>
                        <option>Politics</option>
                        <option>Relationships</option>
                        <option>Science & Tech</option>
                    </select>
                </div>
            </div>

            <div class="mt-8">
                <div class="flex justify-between">
                    <label class="block font-medium text-gray-700" for="image">Image</label>
                    <span class="text-sm text-gray-500" id="image-optional">Optional</span>
                </div>
                <div class="mt-2">
                    <input class="hidden" id="image" name="image" type="file" accept="image/*">
                    <button class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 transition" type="button">
                        <svg class="-ml-1 mr-2 h-5 w-5" width="20" height="20" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                        </svg>
                        Upload Image
                    </button>
                </div>
                <p class="mt-2 text-sm text-gray-500" id="image-description">This image will appear next to your poll's title.</p>
            </div>

            <div class="flex justify-end mt-8">
                <button class="inline-flex items-center px-6 py-3 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 transition" type="submit">
                    <svg class="-ml-1 mr-3 h-5 w-5" width="20" height="20" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                    Create Poll
                </button>
            </div>
        </form>
    </panel>
</template>

<script>
    import Panel from '@/Shared/Panel'

    export default {
        components: {
            Panel,
        },
    }
</script>
