<template>
    <div id="contact" class="section">
        <div class="section-header">
            <div class="title-container">
                <p class="title">Contact Me</p>
                <div class="title-line w-6/12"></div>
            </div>
        </div> 
        
        <div class="section-content">
            <ContactForm :errors="errors"></ContactForm>
        </div>
    </div>
</template>

<script>
import ContactForm from './ContactForm.vue'

export default {
    components: {
        ContactForm
    },
    props: {
        errors: {
            type: Object,
            required: true
        }
    },
    setup(props) {
        
    },
}
</script>