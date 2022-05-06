<template>
    <Layout title="Elvis Carrasco | Portfolio">
        <!-- SUCCESS FLASH CARD -->
        <FlashCard class="flash-card success-card" v-if="$page.props.flash.message" :message="$page.props.flash.message"></FlashCard>

        <!-- ERROR FLASH CARD --> 
        <FlashCard class="flash-card error-card" v-if="showErrorFlashCard" :message="errorFlashCardMessage"></FlashCard>

        <!-- START WALL --> 
        <div id="start" class="wall-background flex w-full h-screen ml-auto relative 2xl:w-10/12">
           <StartWall />
        </div>

        <!-- SECTIONS -->
        <div class="sections-wrapper">
            <!-- SKILLS -->
            <div class="section-container">
                <SkillSection />
            </div>

            <!-- PROJECTS -->
            <div class="section-container">
               <ProjectList />
            </div>

            <!-- HIRE ME -->
            <div class="hire-me">
               <HireMe />
            </div>

            <!-- EDUCATION & ACHIEVEMENTS -->
            <div class="section-container">
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
            </div>

            <!-- CODING CHALLENGES -->
            <div class="section-container">
                <div id="challenges"  class="section">
                    <div class="section-header">
                        <div class="title-container">
                            <p class="title">Challenges</p>
                            <div class="title-line w-6/12"></div>
                        </div>
                        <p class="subtitle">Here are some common and cool algorithms and coding challenges with UI: </p>
                    </div>

                    <div class="section-content">
                        <div class="preview-section">
                            <PreviewSection :elements="algorithms"></PreviewSection>
                            <PreviewSection :elements="challenges"></PreviewSection>    
                        </div>
                    </div> 
                </div>
            </div>

            <!-- ABOUT ME -->
            <div class="section-container">
                <div id="about" class="section">
                   <div class="section-header">
                        <div class="title-container">
                            <p class="title">About Me</p>
                            <div class="title-line w-6/12"></div>
                        </div>
                    </div> 

                    <div class="section-content">
                        <p class="about-text">
                            I'm a passionate software developer and systems engineering student (I'll graduate this year, 2022). My goal is to help you design and develop quality systems that solve real problems and make a difference. In my opinion, good practices and testing are an integral component of the software development process, no matter how big or small the project is. 
                            I enjoy learning new things, working out, listening to music, and cooking. 
                            Alright, I look forward to hearing from you and working together.
                        </p>
                    </div>
                </div>
            </div>

            <!-- CONTACT ME -->
            <div class="section-container">
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
            </div> 
        </div>
    </Layout>
</template>
<script>

import { ref, watch } from 'vue'
import Layout from '../../Layouts/AppLayout.vue'
import StartWall from '../../Components/StartWall.vue'
import SkillSection from '../../Components/SkillSection.vue'
import ProjectList from '../../Components/ProjectList.vue'
import HireMe from '../../Components/HireMe.vue'
import PreviewSection from '../../Components/PreviewSection.vue'
import FlashCard from '../../Components/FlashCard.vue'
import ContactForm from '../../Components/ContactForm.vue'

export default {
    components: {
        Layout,
        StartWall,
        SkillSection,
        ProjectList,
        HireMe,
        ContactForm,
        PreviewSection,
        FlashCard,
    },
    props: {
        errors: {
            type: Object,
            required: true,
        }
    },
    setup(props) {

        const showErrorFlashCard = ref(false)
        const errorFlashCardMessage = ref('')

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

        const challengesImagesUrl = '/images/challenges'
        const basechallengesUrl = 'https://aacsite.netlify.app'

        const algorithms = [
            {url: `${basechallengesUrl}/binaryTree`, title: 'Binary Tree', imageUrl: `${challengesImagesUrl}/binarytree_c.png`},
            {url: `${basechallengesUrl}/linkedList`, title: 'Linked List', imageUrl: `${challengesImagesUrl}/linkedlist_c.png`},
            {url: `${basechallengesUrl}/selectionSort`, title: 'Selection Sort', imageUrl: `${challengesImagesUrl}/selection_c.png`},
            {url: `${basechallengesUrl}/shortestPath`, title: 'Shortest Path', imageUrl: `${challengesImagesUrl}/shortest_c.png`},
        ]

        const challenges = [
            {url: `${basechallengesUrl}/stringReversal`, title: 'String Reversal', imageUrl: `${challengesImagesUrl}/stringreversal_c.png`},
            {url: `${basechallengesUrl}/palindrome`, title: 'Palindrome', imageUrl: `${challengesImagesUrl}/palindrome_c.png`},
            {url: `${basechallengesUrl}/fizzbuzz`, title: 'Fizz Buzz', imageUrl: `${challengesImagesUrl}/fizzbuzz_c.png`},
            {url: `${basechallengesUrl}/findvowels`, title: 'Find Vowels', imageUrl: `${challengesImagesUrl}/findvowels_c.png`},
            {url: `${basechallengesUrl}/maxchars`, title: 'Max Chars', imageUrl: `${challengesImagesUrl}/maxchars_c.png`},
            {url: `${basechallengesUrl}/anagram`, title: 'Anagram', imageUrl: `${challengesImagesUrl}/anagram_c.png`}
        ]

        watch(() => props.errors, () => {
            if (Object.keys(props.errors).length > 0) {
                showErrorFlashCard.value = true
                errorFlashCardMessage.value = 'There was an error with the form fields...'

                setTimeout(() => showErrorFlashCard.value = false, 5000)
            }
        })

        return {
            certificates,
            algorithms,
            challenges,
            showErrorFlashCard,
            errorFlashCardMessage,
        }
    },
}
</script>