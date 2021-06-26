<template>
    <form class="ballot-box-hidden-results">
        <fieldset>
            <legend class="sr-only">{{ title }}</legend>

            <div v-for="(option, index) in options" class="relative flex items-center" :class="{ 'mt-2': index > 0 }" :key="index">
                <label class="ballot-box-option" :for="'option' + index">
                    <input class="ballot-box-option-chad" :id="'option' + index" name="option_id" type="radio" :value="option.id" required>
                    <span class="ballot-box-option-name">{{ option.name }}</span>
                    <span class="ballot-box-option-results-container">
                        <span class="ballot-box-option-results-numeric">{{ option.votesCount }}</span>
                        <span class="ballot-box-option-results-percentage">{{ option.votesPercentage }}</span>
                    </span>
                    <span class="ballot-box-option-results-bar" :style="{ background: option.color, maxWidth: option.votesPercentage }" aria-hidden="true"></span>
                </label>
            </div>
        </fieldset>

        <button class="sr-only" type="submit">Cast Your Vote</button>
    </form>
</template>

<script>
    export default {
        props: {
            options: {
                type: Array,
                required: true,
            },
            title: {
                type: String,
                required: true,
            },
        },
    }
</script>
