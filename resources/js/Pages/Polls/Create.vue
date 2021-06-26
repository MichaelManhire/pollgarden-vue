<template>
    <panel element="section">
        <page-title>Create a Poll</page-title>

        <form class="mt-6">
            <form-input id="title" name="title" label="Title" required />

            <fieldset class="mt-8">
                <legend class="block font-medium text-gray-700">Options</legend>

                <form-input class="mt-3" id="option0" name="options[0]" label="Option 1" placeholder="Option 1" has-hidden-label required />
                <form-input class="mt-3" id="option1" name="options[1]" label="Option 2" placeholder="Option 2" has-hidden-label required />
                <form-input class="mt-3" id="option2" name="options[2]" label="Option 3" placeholder="Option 3" has-hidden-label />
                <form-input class="mt-3" id="option3" name="options[3]" label="Option 4" placeholder="Option 4" has-hidden-label />
                <form-input class="mt-3" id="option4" name="options[4]" label="Option 5" placeholder="Option 5" has-hidden-label />
                <form-input class="mt-3" id="option5" name="options[5]" label="Option 6" placeholder="Option 6" has-hidden-label />
                <form-input class="mt-3" id="option6" name="options[6]" label="Option 7" placeholder="Option 7" has-hidden-label />
                <form-input class="mt-3" id="option7" name="options[7]" label="Option 8" placeholder="Option 8" has-hidden-label />

                <div class="flex justify-end mt-3">
                    <secondary-button type="button">
                        <template v-slot:icon>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                            </svg>
                        </template>

                        <template v-slot:default>
                            Add Option
                        </template>
                    </secondary-button>
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
                <p class="mt-2 text-sm text-gray-500" id="image-description">This image will appear next to your poll's title.</p>
            </div>

            <div class="flex justify-end mt-8">
                <primary-button type="submit" is-large>
                    <template v-slot:icon>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </template>

                    <template v-slot:default>
                        Create Poll
                    </template>
                </primary-button>
            </div>
        </form>
    </panel>
</template>

<script>
    import FormInput from '@/Shared/FormInput'
    import PageTitle from '@/Shared/PageTitle'
    import Panel from '@/Shared/Panel'
    import PrimaryButton from '@/Shared/PrimaryButton'
    import SecondaryButton from '@/Shared/SecondaryButton'

    export default {
        components: {
            FormInput,
            PageTitle,
            Panel,
            PrimaryButton,
            SecondaryButton,
        },
    }
</script>
