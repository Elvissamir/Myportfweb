<template>
    <div class="w-full mx-auto max-w-xs">
        <form class="contact-form">
            <div class="form-field">
                <label class="form-label" for="title">
                    Subject
                </label>
                <input class="form-input" id="title" type="text">
            </div>

            <div class="form-field">
                <label class="form-label" for="email">
                    Email
                </label>
                <input class="form-input" id="email" type="email">
            </div>

            <div class="form-field">
                <label class="form-label" for="content">
                    Content
                </label>
                <textarea class="form-textarea" name="" id="content" cols="30" rows="6"></textarea>
            </div>

            <div class="flex items-center justify-between mt-8">
                <button class="button brand-button" type="button">
                    Send
                </button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    setup() {
        
    },
}
</script>