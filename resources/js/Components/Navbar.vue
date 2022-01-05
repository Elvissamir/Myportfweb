<template>
    <nav class="bg-gray-800 w-full nav transition-all" :class="[(show)? 'translate-x-0' : '-translate-x-full']">
        <!-- 768 PX -->
        <div class="flex flex-col w-full h-screen lg:flex-row">
            <!-- GITHUB LINK -->
            <div class="flex text-white font-bold mx-auto justify-center mt-8 lg:mx-0">
                <a class="flex flex-col font-black items-baseline" href="https://github.com/Elvissamir">
                    <p class="text-lg sm:text-blue-300 md:text-blue-600 lg:text-blue-800 xl:text-green-900 2xl:text-red-900">Check my Github</p>
                    <p class="text-5xl text-center mx-auto w-12 h-8 mt-3">
                        <font-awesome-icon :icon="['fab', 'github-square']" />
                    </p>
                </a>
            </div>

            <!-- MENU LINKS -->
            <div class="flex flex-col justify-center mt-3 w-6/12 mx-auto lg:flex-row lg:w-auto lg:mx-0">
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
    props: {
        show: {
            required: true,
            type: Boolean,
        }
    },
    setup(props) {
        
    },
}
</script>