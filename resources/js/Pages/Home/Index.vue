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
               <EducationSection />
            </div>

            <!-- CODING CHALLENGES -->
            <div class="section-container">
               <ChallengesSection />
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
import EducationSection from '../../Components/EducationSection.vue'
import ChallengesSection from '../../Components/ChallengesSection.vue'
import FlashCard from '../../Components/FlashCard.vue'
import ContactForm from '../../Components/ContactForm.vue'

export default {
    components: {
        Layout,
        StartWall,
        SkillSection,
        ProjectList,
        HireMe,
        EducationSection,
        ChallengesSection,
        ContactForm,
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

        watch(() => props.errors, () => {
            if (Object.keys(props.errors).length > 0) {
                showErrorFlashCard.value = true
                errorFlashCardMessage.value = 'There was an error with the form fields...'

                setTimeout(() => showErrorFlashCard.value = false, 5000)
            }
        })

        return {
            showErrorFlashCard,
            errorFlashCardMessage,
        }
    },
}
</script>