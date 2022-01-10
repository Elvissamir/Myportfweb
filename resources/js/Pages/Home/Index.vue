<template>
    <Layout>
        <!-- START WALL --> 
        <div id="start" class="flex w-full h-screen ml-auto relative">
            <img class="flex w-full h-full" src="/images/wall.jpg" alt="">

            <div class="flex justify-center items-center absolute w-full h-full bg-black bg-opacity-75">
                <div class="flex flex-col justify-center items-center w-6/12 md:w-10/12">
                    <p class="text-5xl text-center theta-gradient font-playfair sm:text-6xl md:text-7xl xl:text-8xl">Elvis Carrasco</p>
                    <p class="text-3xl text-white text-center font-playfair font-black mt-6 sm:text-4xl md:text-5xl xl:text-6xl">Fullstack Software Developer</p>
                </div>
            </div>
        </div>

        <!-- SECTIONS -->
        <div class="flex flex-col w-full ml-auto sections-wrapper">
            <!-- SKILLS -->
            <div class="section-container">
                <div id="skills" class="section">
                    <div class="flex flex-col justify-center items-center text-center mt-16">
                        <p class="title">Skills</p>
                        <p class="subtitle">These are some of the programming languages, tools and frameworks I use: </p>
                    </div>

                    <!-- SKILL BLOCKS --> 
                    <div class="flex flex-col justify-center w-6/12 mx-auto">
                        <div class="flex justify-center">
                            <div class="flex justify-center card">
                                <p class="card-content text-blue-700"><font-awesome-icon :icon="['fab', 'php']" /></p>
                            </div>
                        </div>

                        <div class="flex justify-center mt-4">
                            <div class="flex justify-center card mr-4">
                                <p class="card-content text-red-500"><font-awesome-icon :icon="['fab', 'laravel']" /></p>
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
                                <p class="card-content text-gray-500"><font-awesome-icon :icon="['fas', 'database']" /></p>
                            </div>
                        </div>

                        <div class="flex justify-center mt-4">
                            <div class="flex justify-center card mr-4">
                                <p class="card-content text-yellow-100"><font-awesome-icon :icon="['fab', 'git']" /></p>
                            </div>
                            <div class="flex justify-center card">
                                <p class="card-content text-black"><font-awesome-icon :icon="['fab', 'github']" /></p>
                            </div>
                        </div>

                        <div class="flex justify-center mt-4">
                            <div class="flex justify-center card">
                                <p class="card-content text-pink-500"><font-awesome-icon :icon="['fab', 'sass']" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PROJECTS -->
            <div class="section-container">
                <div id="projects" class="section">
                    <div class="flex flex-col justify-center items-center mt-16">
                        <p class="title">Projects</p>
                        <p class="subtitle">These are some of the projects I've done:</p>
                    </div>
                          
                    <!-- PROJECT CARD -->
                    <div class="projects flex flex-col items-center justify-center w-full">
                        <ProjectCard v-for="(project, index) in projects" :key="index" :project="project"></ProjectCard>
                    </div>
                </div>
            </div>

            <!-- HIRE ME -->
            <div class="flex bg-gray-400 my-14">
                <div class="flex flex-col justify-center items-baseline py-5 mx-auto sm:flex-row">
                    <p class="text-2xl my-auto text-white font-playfair font-black sm:text-3xl md:text-4xl">Want to hire Me?</p>
                    <a class="button brand-button no-underline mx-auto mt-3 sm:mt-0 sm:ml-8" href="#contact">Let's talk!</a>
                </div>
            </div>

            <!-- EDUCATION & ACHIEVEMENTS -->
            <div class="section-container">
                <div id="education" class="section">
                    <div class="flex flex-col justify-center items-center mt-16">
                        <p class="title">Education</p>
                        <p class="subtitle">These are some of the certificates I've completed</p>
                    </div>

                    <!-- certifications -->
                    <div class="certificates-container">
                        <div v-for="(certificate, index) in certificates" :key="index" class="certificate">
                            <a :href="certificate.url">
                                <img :src="certificate.image" alt="">
                                <p class="text-white font-bold font-lora text-center mt-2">{{ certificate.title }}</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CODING CHALLENGES -->
            <div class="section-container">
                <div id="challenges"  class="section">
                    <div class="flex flex-col justify-center items-center mt-16">
                        <p class="title">Challenges</p>
                        <p class="subtitle">A coding challenge is a problem that must be solved using logic and programming. Here are some common and cool ones: </p>
                    </div>
                </div>
            </div>

            <!-- ABOUT ME -->
            <div class="section-container">
                <div id="about" class="section">
                    <div class="flex flex-col justify-center items-center mt-16">
                        <p class="title">About Me</p>
                        <div class="flex w-8/12 mt-8">
                            <div class="w-6/12"></div>
                            <div class="w-6/12">
                                <p class="subtitle">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium excepturi eaque molestias magni adipisci laborum perspiciatis obcaecati cum doloremque, dolore facere aut quidem perferendis recusandae iste minus consequatur, commodi a?
                                </p>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>

            <!-- CONTACT ME -->
            <div class="section-container">
                <div id="contact" class="section">
                    <div class="flex flex-col justify-center items-center mt-16">
                        <p class="title">Contact Me</p>
                    </div>
            
                    <div class="w-full mx-auto max-w-xs my-14">
                        <form class="bg-gray-800 border border-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                            <div class="mb-4">
                                <label class="block text-white font-lora text-lg font-bold mb-1" for="title">
                                    Subject
                                </label>
                                <input class="font-lora font-black shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text">
                            </div>

                            <div class="mb-4">
                                <label class="block text-white text-lg font-lora font-bold mb-1" for="email">
                                    Email
                                </label>
                                <input class="font-lora font-black shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email">
                            </div>

                            <div class="mb-4">
                                <label class="block text-white text-lg font-lora font-bold mb-1" for="content">
                                    Content
                                </label>
                                <input class="font-lora font-black shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="content" type="text">
                            </div>

                            <div class="flex items-center justify-between mt-8">
                                <button class="button brand-button focus:outline-none focus:shadow-outline" type="button">
                                    Send
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div> 
        </div>
    </Layout>
</template>
<script>

import { ref } from 'vue'
import Layout from '../../Layouts/AppLayout.vue'
import ProjectCard from '../../Components/ProjectCard.vue'

export default {
    components: {
        Layout,
        ProjectCard,
    },
    setup() {
        
        const projects = ref([
            { 
                code: 'CPT',
                title: 'Crypto Portfolio Tracker', 
                description: 'CPT allows you to keep track of your crypto portfolio and markets. Some of the features are: portfolio management (add, update and delete cryptos), charts (top cryptos, distribution), crypto markets.',
                programmingL: 'php',
                stack: ['/images/BrandLogos/php.png', '/images/BrandLogos/laravel.svg', '/images/BrandLogos/mysql.png', '/images/BrandLogos/inertia.png', '/images/BrandLogos/vue.png', '/images/BrandLogos/tailwind.png'],
                devices: ['mobile', 'tablet', 'desktop'],
                language: 'English',
                image: '/images/cryptoPics/cryptopt.gif',
                backgroundColor: "bg-blue-800",
                demoBtnColors: 'bg-blue-800 text-white border-2 border-blue-800 hover:text-blue-800 hover:bg-white',
                demoUrl: 'http://cryptop.test/login',
                githubUrl: 'http://github.com/elvissamir/cryptop'
            },
            {
                code: 'Servm',
                title: 'School Management', 
                description: 'Servm is a management system developed for the "Antonio José" school. It allows management of students, teachers, courses, subjects and more.',
                programmingL: 'php',
                stack: ['/images/BrandLogos/php.png', '/images/BrandLogos/laravel.svg', '/images/BrandLogos/mysql.png', '/images/BrandLogos/inertia.png', '/images/BrandLogos/vue.png', '/images/BrandLogos/tailwind.png'],
                devices: ['desktop'],
                language: 'Spanish',
                image: '/images/servmPics/servm.gif',
                backgroundColor: "bg-green-800",
                demoBtnColors: 'bg-green-800 text-white border-2 border-green-800 hover:text-green-800 hover:bg-white',
                demoUrl: 'http://servm.test/login',
                githubUrl: 'http://github.com/elvissamir/servm'
            }
        ]);

        const courseraVerificationUrl = 'http://coursera.org/verify';
        const certificationImagesUrl = "/images/Certificates";
        const certificates = [
            {title: 'Html5', image: `${certificationImagesUrl}/03html.png`, url: `${courseraVerificationUrl}/J27UJY2P9M9K`},
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
            projects,
            certificates,
        }
    },
}
</script>