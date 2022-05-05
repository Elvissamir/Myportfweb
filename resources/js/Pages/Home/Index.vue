<template>
    <Layout title="Elvis Carrasco | Portfolio">
        <!-- SUCCESS FLASH CARD -->
        <FlashCard class="flash-card success-card" v-if="$page.props.flash.message" :message="$page.props.flash.message"></FlashCard>

        <!-- ERROR FLASH CARD --> 
        <FlashCard class="flash-card error-card" v-if="showErrorFlashCard" :message="errorFlashCardMessage"></FlashCard>

        <!-- START WALL --> 
        <div id="start" class="wall-background flex w-full h-screen ml-auto relative 2xl:w-10/12">
            <div class="flex flex-col justify-center items-center w-full h-full absolute z-20">
                <div class="flex flex-col justify-center items-center w-6/12 md:w-10/12">
                    <div>
                        <p class="text-5xl text-center theta-gradient font-playfair sm:text-6xl md:text-7xl xl:text-8xl">Elvis Carrasco</p>
                        <p class="text-3xl text-white text-center font-playfair font-black mt-6 sm:text-4xl md:text-5xl xl:text-6xl">Software Developer</p>
                    </div>
                    <div class="mouse mt-20 md:mt-36 lg:mt-42"></div>
                </div>
            </div>
        </div>

        <!-- SECTIONS -->
        <div class="sections-wrapper">
            <!-- SKILLS -->
            <div class="section-container">
                <div id="skills" class="section">
                    <div class="section-header">
                        <div class="title-container">
                            <p class="title">Skills</p>
                            <div class="title-line w-6/12"></div>
                        </div>  
                        <p class="subtitle">These are some of the programming languages, tools and frameworks I use: </p>
                    </div>

                    <div class="section-content">
                        <!-- SKILL BLOCKS --> 
                        <div class="skills-container">
                            <div class="flex justify-center">
                                <div class="flex justify-center card mr-4">
                                    <p class="card-content text-green-400"><font-awesome-icon :icon="['fab', 'node-js']" /></p>
                                </div>
                            </div>

                            <div class="flex justify-center mt-4">
                                <div class="flex justify-center card mr-4">
                                    <p class="card-content text-blue-400"><font-awesome-icon :icon="['fab', 'react']" /></p>
                                </div>

                                <div class="flex justify-center card mr-4">
                                    <p class="card-content text-red-400"><font-awesome-icon :icon="['fab', 'laravel']" /></p>
                                </div>

                                <div class="flex justify-center card">
                                    <p class="card-content text-green-600"><font-awesome-icon :icon="['fab', 'vuejs']" /></p>
                                </div>
                            </div>

                            <div class="flex justify-center mt-4">
                                <div class="flex justify-center card mr-4">
                                    <p class="card-content text-yellow-600"><font-awesome-icon :icon="['fab', 'html5']" /></p>
                                </div>

                                <div class="flex justify-center card mr-4">
                                    <p class="card-content text-blue-400"><font-awesome-icon :icon="['fab', 'css3']" /></p>
                                </div>

                                <div class="flex justify-center card mr-4">
                                    <p class="card-content text-yellow-300"><font-awesome-icon :icon="['fab', 'js']" /></p>
                                </div>

                                <div class="flex justify-center card">
                                    <p class="card-content"><img class="flex h-8 md:h-10" src="/images/BrandLogos/tailwind.png" alt=""></p>
                                </div>
                            </div>

                            <div class="flex justify-center mt-4">
                                <div class="flex justify-center card mr-4">
                                    <p class="card-content"><img class="flex h-6 md:h-8" src="/images/BrandLogos/git.png" alt=""></p>
                                </div>
                                
                                <div class="flex justify-center card mr-4">
                                    <p class="card-content text-red-500"><font-awesome-icon :icon="['fab', 'npm']" /></p>
                                </div>

                                <div class="flex justify-center card">
                                    <p class="card-content"><img class="flex h-6 md:h-8" src="/images/BrandLogos/mysql.png" alt=""></p>
                                </div>
                            </div>

                            <div class="flex justify-center mt-4">
                                <div class="flex justify-center card">
                                    <p class="card-content text-black"><font-awesome-icon :icon="['fab', 'github']" /></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PROJECTS -->
            <div class="section-container">
                <div id="projects" class="section">
                    <div class="section-header">
                        <div class="title-container">
                            <p class="title">Projects</p>
                            <div class="title-line w-6/12"></div>
                        </div>
                        <p class="subtitle">These are some of the projects I've developed:</p>  
                    </div>

                    <div class="section-content">
                        <!-- PROJECT CARD -->
                        <div class="projects">
                            <ProjectCard v-for="(project, index) in projects" :key="index" :project="project"></ProjectCard>
                        </div>
                    </div>
                </div>
            </div>

            <!-- HIRE ME -->
            <div class="hire-me">
                <div class="flex flex-col justify-center items-baseline py-5 mx-auto sm:flex-row">
                    <p class="text-2xl my-auto text-white font-playfair font-black sm:text-3xl md:text-4xl">Want to hire Me?</p>
                    <a class="button brand-button no-underline mx-auto mt-3 sm:mt-0 sm:ml-8" href="#contact">Let's talk!</a>
                </div>
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
import ProjectCard from '../../Components/ProjectCard.vue'
import ContactForm from '../../Components/ContactForm.vue'
import PreviewSection from '../../Components/PreviewSection.vue'
import FlashCard from '../../Components/FlashCard.vue'

export default {
    components: {
        Layout,
        ProjectCard,
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
        
        const projects = ref([
            { 
                code: 'CPT',
                title: 'Crypto Portfolio Tracker', 
                description: 'CPT keeps track of your crypto portfolio and markets. The main features are: portfolio management, charts (top cryptos, distribution), crypto markets.',
                programmingL: 'php',
                stack: ['/images/BrandLogos/php.png', '/images/BrandLogos/laravelb.jpg', '/images/BrandLogos/mysql.png', '/images/BrandLogos/inertia.png', '/images/BrandLogos/vue.png', '/images/BrandLogos/tailwind.png'],
                devices: ['mobile', 'tablet', 'desktop'],
                language: 'English',
                image: '/images/cryptoPics/cryptopt.gif',
                demoUrl: 'https://cpptracker.herokuapp.com/login',
                githubUrl: 'https://github.com/Elvissamir/cryptoPT'
            },
            {
                code: 'Servm',
                title: 'School Management', 
                description: 'Servm is a management system developed for the "Antonio José" school. It allows management of students, teachers, courses, subjects and more.',
                programmingL: 'php',
                stack: ['/images/BrandLogos/php.png', '/images/BrandLogos/laravelb.jpg', '/images/BrandLogos/mysql.png', '/images/BrandLogos/inertia.png', '/images/BrandLogos/vue.png', '/images/BrandLogos/tailwind.png'],
                devices: ['desktop'],
                language: 'Spanish',
                image: '/images/servmPics/servm.gif',
                demoUrl: 'https://servm.herokuapp.com/login',
                githubUrl: 'https://github.com/Elvissamir/registrationManager'
            },
            {
                code: 'Myportfweb',
                title: 'My Portfolio', 
                description: 'My awesome web portfolio. The design was inspired by paperpillars and theta network.',
                programmingL: 'php',
                stack: ['/images/BrandLogos/php.png', '/images/BrandLogos/laravelb.jpg', '/images/BrandLogos/mysql.png', '/images/BrandLogos/inertia.png', '/images/BrandLogos/vue.png', '/images/BrandLogos/tailwind.png'],
                devices: ['desktop'],
                language: 'English',
                image: '/images/myportfwebPics/myportfweb.gif',
                demoUrl: '',
                githubUrl: 'https://github.com/Elvissamir/Myportfweb'
            },
            {
                code: 'AAC',
                title: 'Algorithms & Challenges', 
                description: 'AAC is a project aimed to gather cool algorithms and coding challenges with a UI.',
                programmingL: 'php',
                stack: [
                    '/images/BrandLogos/javascript.png',
                    '/images/BrandLogos/vue.png', 
                    '/images/BrandLogos/tailwind.png'
                ],
                devices: ['desktop'],
                language: 'English',
                image: '/images/aacPics/aac.gif',
                demoUrl: 'https://aacsite.netlify.app/',
                githubUrl: 'https://github.com/Elvissamir/AAC'
            },
            {
                code: 'Fullrvmovies',
                title: 'RVMovies', 
                description: 'Movie inventory manager created with Node and React.',
                programmingL: 'node',
                stack: [
                    '/images/BrandLogos/javascript.png',
                    '/images/BrandLogos/node.png', 
                    '/images/BrandLogos/express.png', 
                    '/images/BrandLogos/mongo.png',
                    '/images/BrandLogos/react.png',
                    '/images/BrandLogos/tailwind.png'
                ],
                devices: ['desktop'],
                language: 'English',
                demoUrl:  "https://rvmovies.netlify.app/" ,
                image: '/images/vmoviesPics/vmovie.gif',
                githubUrl: 'https://github.com/Elvissamir/Fullrvmovies'
            }
        ]);

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
            projects,
            certificates,
            algorithms,
            challenges,
            showErrorFlashCard,
            errorFlashCardMessage,
        }
    },
}
</script>