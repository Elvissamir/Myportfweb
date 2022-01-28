<template>
    <div class="w-full mx-auto max-w-xs">
        <form @submit.prevent="submit" class="contact-form">
            <div class="form-field">
                <label class="form-label" for="title">
                    Title
                </label>
                <input class="form-input" id="title" type="text" v-model="form.title">
                <div class=" text-red-500 font-bold" v-if="errors.title">{{ errors.title }}</div>
            </div>

            <div class="form-field">
                <label class="form-label" for="email">
                    Email
                </label>
                <input class="form-input" id="email" type="email" v-model="form.email">
                <div class=" text-red-500 font-bold" v-if="errors.email">{{ errors.email }}</div>
            </div>

            <div class="form-field">
                <label class="form-label" for="content">
                    Content
                </label>
                <textarea class="form-textarea" name="" id="content" cols="30" rows="6" v-model="form.content"></textarea>
                <div class="text-red-500 font-bold" v-if="errors.content">{{ errors.content }}</div>
            </div>

            <div class="flex items-center justify-between mt-8">
                <button class="button brand-button w-full" type="submit">
                    Send
                </button>
            </div>
        </form>
    </div>
</template>

<script>
import { ref } from 'vue'
import { Inertia } from '@inertiajs/inertia'

export default {
    props: {
        errors: {
            required: true,
            type: Object
        }
    },
    setup() {

        const form = ref({
            title: null,
            email: null,
            content: null,
        })

        function submit() {
            Inertia.post('/messages', form.value)
        }

        return { form, submit }
   },
}
</script>