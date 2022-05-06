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
               <AboutMe />
            </div>

            <!-- CONTACT ME -->
            <div class="section-container">
                <ContactMe :errors="errors" />
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
import AboutMe from '../../Components/AboutMe.vue'
import ContactMe from '../../Components/ContactMe.vue'
import FlashCard from '../../Components/FlashCard.vue'

export default {
    components: {
        Layout,
        StartWall,
        SkillSection,
        ProjectList,
        HireMe,
        EducationSection,
        ChallengesSection,
        AboutMe, 
        ContactMe,
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