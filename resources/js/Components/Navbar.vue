<template>
    <nav class="bg-gray-800 hidden fixed w-2/12 md:w-2/12 nav">
        <!-- 768 PX -->
        <div class="flex flex-col w-full h-screen justify-center items-center">
            <!-- GITHUB LINK -->
            <div class="flex text-white font-bold mt-2 mx-auto justify-center">
                <a class="flex flex-col font-black items-baseline" href="">
                    <p class="text-lg sm:text-blue-300 md:text-blue-600 lg:text-blue-800 xl:text-green-900 2xl:text-red-900">Check my Github</p>
                    <p class="text-5xl text-center mx-auto w-12 h-8 mt-3">
                        <font-awesome-icon :icon="['fab', 'github-square']" />
                    </p>
                </a>
            </div>

            <!-- MENU LINKS -->
            <div class="flex flex-col justify-center text-lg font-bold mt-3 w-6/12 mx-auto">
                <a class="nav-link" href="#start">
                    Start
                </a>
                <a class="nav-link" href="#skills">Skills</a>
                <a class="nav-link" href="#projects">Projects</a>
                <a class="nav-link" href="#education">Education</a>
                <a class="nav-link" href="#challenges">Challenges</a>
                <a class="nav-link" href="#about">About Me</a>
                <a class="nav-link" href="#contact">Contact Me</a>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    setup() {
        
    },
}
</script>