<template>
    <Layout>

        <!-- START WALL --> 
        <div id="start" class="flex w-10/12 h-screen ml-auto relative">
            <img class="flex w-full h-full" src="/images/wall.jpg" alt="">

            <div class="flex justify-center items-center absolute w-full h-full bg-black bg-opacity-75">
                <div class="flex flex-col justify-center items-center">
                    <p class="text-7xl text-transparent bg-clip-text bg-gradient-to-br from-blue-300 to-green-300 font-playfair font-black">Elvis Carrasco</p>
                    <p class="text-5xl text-white font-playfair font-black mt-2">Fullstack Software Developer</p>
                </div>
            </div>
        </div>

        <!-- TEST -->
        <div class="mydiv bg-gradient-to-l from-blue-700 via-blue-800 to-blue-700">
            <p class="text-5xl font-black font-playfair">CPT - Crypto Portfolio Tracker</p>
            <p class="text-3xl font-black font-lora mt-12 w-8/12 mx-auto text-justify">
                CPT is a management system that allows you to keep track of your crypto portfolio and markets. Some of the features are: login system, portfolio management (add, update and delete cryptos), charts and data (total growth, growth %, top cryptos and distribution), crypto markets.
            </p>
            <div class="flex mt-14 mx-auto">
                <!-- PHP -->
                <img class="projectImage" src="/images/BrandLogos/php2.png" alt="">

                <!-- LARAVEL -->
                <img class="projectImage ml-8" src="/images/BrandLogos/laravel.png" alt="">

                <!-- INERTIA -->
                <img class="projectImage ml-8" src="/images/BrandLogos/inertia.png" alt="">

                <!-- MYSQL -->
                <img class="projectImage ml-8" src="/images/BrandLogos/mysql.png" alt="">
            </div>

             <div class="flex mt-8 mx-auto">
                <!-- PHP -->
                <img class="projectImage" src="/images/BrandLogos/vue.png" alt="">

                <!-- LARAVEL -->
                <img class="projectImage ml-8" src="/images/BrandLogos/tailwind.png" alt="">

                <!-- INERTIA -->
                <img class="projectImage ml-8" src="/images/BrandLogos/git.png" alt="">

                <!-- MYSQL -->
                <img class="projectImage ml-8" src="/images/BrandLogos/github.png" alt="">
            </div>
        </div>


         <div class="mydiv bg-gradient-to-l from-green-600 via-green-800 to-green-600">
            <p class="text-5xl font-black font-playfair">Servm - School Registration and Enrollment</p>
            <p class="text-3xl font-black font-lora mt-12 w-8/12 mx-auto text-justify">
                Servm is a management and registration system developed for the "Antonio Jose Carreño" school. This project allows users to manage (read, create, update and delete) students, teachers, courses, degrees, sections, scores and subjects.
            </p>
            <div class="flex mt-14 mx-auto">
                <!-- PHP -->
                <img class="projectImage" src="/images/BrandLogos/php2.png" alt="">

                <!-- LARAVEL -->
                <img class="projectImage ml-8" src="/images/BrandLogos/laravel.png" alt="">

                <!-- INERTIA -->
                <img class="projectImage ml-8" src="/images/BrandLogos/inertia.png" alt="">

                <!-- MYSQL -->
                <img class="projectImage ml-8" src="/images/BrandLogos/mysql.png" alt="">
            </div>

             <div class="flex mt-8 mx-auto">
                <!-- PHP -->
                <img class="projectImage" src="/images/BrandLogos/vue.png" alt="">

                <!-- LARAVEL -->
                <img class="projectImage ml-8" src="/images/BrandLogos/tailwind.png" alt="">

                <!-- INERTIA -->
                <img class="projectImage ml-8" src="/images/BrandLogos/git.png" alt="">

                <!-- MYSQL -->
                <img class="projectImage ml-8" src="/images/BrandLogos/github.png" alt="">
            </div>
        </div>

        <!-- SECTIONS -->
        <div class="flex flex-col w-10/12 ml-auto bg-gradient-to-l from-gray-900 via-gray-800 to-gray-900">
            <!-- SKILLS -->
            <div class="section-container">
                <div class="section">
                    <div class="flex flex-col justify-center items-center text-center">
                        <p id="skills" class="title">Skills</p>
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
                <div class="section">
                    <div class="flex flex-col justify-center items-center">
                        <p id="projects" class="title">Projects</p>
                        <p class="subtitle">These are some of the projects I've done:</p>
                    </div>

                    <div v-for="(project, npro) in projects" :key="npro" class="project-container mt-10">
                       <div class="project-details">
                            <p class="project-title">{{ project.title }}</p>

                            <!-- description --> 
                            <div class="flex flex-col mt-3">
                                <p class="project-text text-justify">{{ project.description }}</p>
                            </div>

                            <!-- programming language -->
                            <div class="flex mt-3">
                                <p class="project-text">Progamming Language: </p>
                                <p class="project-text ml-2">{{ project.programmingL }}</p>
                            </div>

                            <!-- basic tecnologies -->
                            <div class="flex">
                                <p class="project-text">Basics: </p>
                                <div class="ml-2" v-for="(basic, index) in project.basics" :key="index">
                                    <p class="project-text">{{ basic }}</p>
                                </div>
                            </div>

                            <!-- database -->
                            <div class="flex">
                                <p class="project-text">Database: </p>
                                <p class="project-text ml-2">{{ project.database }}</p>
                            </div>
                            
                            <!-- frameworks -->
                            <div class="flex">
                                <p class="project-text">Frameworks: </p>
                                <div class="ml-2" v-for="(framework, index) in project.frameworks" :key="index">
                                    <p class="project-text"></p>
                                </div>
                            </div>

                            <!-- devices -->
                            <div class="flex">
                                <p class="project-text">Devices: </p>
                                <div class="ml-2" v-for="(device, index) in project.devices" :key="index">
                                    <p class="project-text">{{ device }}</p>
                                </div>
                            </div>

                            <!-- language -->
                            <div class="flex">
                                <p class="project-text">Language: </p>
                                <p class="project-text ml-2">{{ project.language }}</p>
                            </div>

                            <div class="flex mt-auto">
                                <a class="button bg-black text-white border-2 border-black hover:text-black hover:bg-white" :href="projects[0].githubUrl">On Github</a>
                                <a class="ml-3 button" :class="[project.demoBtnColors]" :href="projects[0].demoUrl">Live Demo</a>
                            </div>
                       </div>
                          
                       <!-- SLIDESHOW --> 
                       <Slideshow :images="project.images" :backgroundColors="project.backgroundColors"></Slideshow>
                   </div>
                </div>
            </div>

            <!-- HIRE ME -->
            <div class="flex bg-gray-400 mt-14">
                <div class="flex justify-center items-baseline py-5 mx-auto">
                    <p class="text-3xl my-auto text-white font-playfair font-black">Want to hire Me?</p>
                    <a class="button font-black bg-gradient-to-br from-blue-300 to-green-300 border-2 border-blue-300 hover:text-gray-800 hover:bg-white text-white no-underline ml-5" href="#contact">Let's talk!</a>
                </div>
            </div>

            <!-- EDUCATION & ACHIEVEMENTS -->
            <div class="section-container">
                <div class="section">
                    <p id="education" class="title">Education</p>
                    <p class="subtitle">These are some of the certificates I've completed</p>

                    <!-- certifications -->
                    <div class="certificates-container">
                        <div v-for="(certificate, index) in certificates" :key="index" class="certificate">
                            <a :href="certificate.url">
                                <img :src="certificate.image" alt="">
                            </a>
                            <p class="text-white font-bold font-lora text-center mt-2">{{ certificate.title }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CODING CHALLENGES -->
            <div class="section-container">
                <div class="section">
                    <p id="challenges" class="title">Challenges</p>
                    <p class="subtitle">A coding challenge is a problem that must be solved using logic and programming. Here are some common and cool ones: </p>
                </div>
            </div>

            <!-- ABOUT ME -->
            <div class="section-container">
                <div class="section">
                    <p id="about" class="title">About Me</p>
                </div>
            </div>

            <!-- CONTACT ME -->
            <div class="section-container">
                <div class="section">
                    <div class="flex flex-col justify-center items-center">
                        <p id="contact" class="title">Contact Me</p>
                    </div>
            
                    <div class="w-full mx-auto max-w-xs my-14">
                        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                            <div class="mb-4">
                                <label class="block text-gray-700 font-lora text-lg font-bold mb-2" for="title">
                                    Subject
                                </label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text">
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-lg font-lora font-bold mb-2" for="email">
                                    Email
                                </label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email">
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-lg font-lora font-bold mb-2" for="content">
                                    Content
                                </label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="content" type="text">
                            </div>

                            <div class="flex items-center justify-between">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-lora font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
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
import Slideshow from '../../Components/Slideshow.vue'

export default {
    components: {
        Layout,
        Slideshow,
    },
    setup() {
        
        const projects = ref([
            { 
                title: 'CPT - Crypto Portfolio Tracker', 
                description: 'CPT is a management system that allows you to keep track of your crypto portfolio and markets. Some of the features are: login system & demo, portfolio management (add, update & delete cryptos), charts & data (total growth, growth %, top cryptos & distribution), crypto markets.',
                programmingL: 'php',
                basics: ['html', 'css', 'javascript'],
                database: 'mariadb',
                frameworks: ['laravel', 'vue', 'inertiajs', 'tailwind'],
                devices: ['mobile', 'tablet', 'desktop'],
                language: 'English',
                images: [
                    {url: '/images/cryptoPics/desktop-x.png', size: 'desktop'},
                    {url: '/images/cryptoPics/desktop-x.png', size: 'tablet'},
                    {url: '/images/cryptoPics/01-mobile.png', size: 'mobile'},
                ],
                backgroundColors: "from-blue-300 via-blue-400 to-blue-300",
                demoBtnColors: 'bg-blue-800 text-white border-2 border-blue-800 hover:text-blue-800 hover:bg-white',
                demoUrl: 'http://cryptop.test/login',
                githubUrl: 'http://github.com/elvissamir/cryptop'
            },
            {
                title: 'Servm - School Management', 
                description: 'Servm is a management and registration system developed for the "Antonio Jose Carreno" school. This project allows users to manage (read, create, update and delete) students, teachers, courses, degrees, sections, scores and subjects.',
                programmingL: 'php',
                basics: ['html', 'css', 'javascript'],
                database: 'mariadb',
                frameworks: ['laravel', 'vue', 'inertiajs', 'tailwind'],
                devices: ['desktop'],
                language: 'Spanish',
                images: [
                    {url: '/images/servmPics/01.png', size: 'desktop'},
                    {url: '/images/servmPics/02.png', size: 'desktop'},
                    {url: '/images/servmPics/03.png', size: 'desktop'},
                    {url: '/images/servmPics/04.png', size: 'desktop'},
                    {url: '/images/servmPics/05.png', size: 'desktop'},
                    {url: '/images/servmPics/06.png', size: 'desktop'},
                ],
                backgroundColors: "from-green-300 via-green-400 to-green-300",
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