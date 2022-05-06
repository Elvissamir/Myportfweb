<template>
    <div id="education" class="section">
        <div class="section-header">
            <div class="title-container">
                <p class="title">Education</p>
                <div class="title-line w-6/12"></div>
            </div>
            <p class="subtitle">These are some of the certificates I've completed</p>
        </div> 

        <div class="section-content">
            <!-- certifications -->
            <div class="certificates-container">
                <div v-for="(certificate, index) in certificates" :key="index" class="certificate">
                    <a 
                        :href="certificate.url"  
                        target="_blank" 
                        rel="noopener noreferrer">
                        <img class="certificate-img" :src="certificate.image" alt="">
                        <p class="text-white text-lg font-bold font-lora text-center mt-2 lg:text-xl">{{ certificate.title }}</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import mycertificates from '../data/certificates'

export default {
    setup() {
        const certificates = [...mycertificates];

        return {
            certificates
        }
    },
}
</script>