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
export default {
    setup() {
        const courseraVerificationUrl = 'http://coursera.org/verify';
        const certificationImagesUrl = "/images/Certificates";
        const certificates = [
            {title: 'HTML5', image: `${certificationImagesUrl}/03html.png`, url: `${courseraVerificationUrl}/J27UJY2P9M9K`},
            {title: 'CSS3', image: `${certificationImagesUrl}/01css.png`, url: `${courseraVerificationUrl}/2NHCEW4VTSGR`},
            {title: 'JS', image: `${certificationImagesUrl}/02js.png`, url: `${courseraVerificationUrl}/3PSJWWABDX72`},
            {title: 'Mobile Design', image: `${certificationImagesUrl}/05styling.png`, url: `${courseraVerificationUrl}/S3QDRDEVRRW9`},
            {title: 'GIT', image: `${certificationImagesUrl}/04git.png`, url: `${courseraVerificationUrl}/DJ2RQAPH7Z48`},
            {title: 'Python Indtroduction', image: `${certificationImagesUrl}/01py.png`, url: `${courseraVerificationUrl}/AH66XLUFPF5L`},
            {title: 'Python Data Structures', image: `${certificationImagesUrl}/02py.png`, url: `${courseraVerificationUrl}/DSL4J4DP5Z3E`},
            {title: 'Python Databases', image: `${certificationImagesUrl}/03py.png`, url: `${courseraVerificationUrl}/93KEAYK5GUED`},
            {title: 'Python Web Data', image: `${certificationImagesUrl}/04py.png`, url: `${courseraVerificationUrl}/SEUQQ2RTH8YM`},
            {title: 'Python Conclusion', image: `${certificationImagesUrl}/05py.jpg`, url: `${courseraVerificationUrl}/XZGEYJAFWZTG`},
        ];

        return {
            certificates
        }
    },
}
</script>