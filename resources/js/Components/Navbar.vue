<template>
    <nav class="bg-gray-800 w-full nav transform transition-all 2xl:w-3/12" :class="[(show)? 'translate-x-0' : '-translate-x-full']">
        <div class="flex flex-col w-full h-screen lg:flex-row lg:h-auto lg:py-2 lg:px-4 lg:justify-around 2xl:flex-col 2xl:h-screen 2xl:justify-center">
            <!-- GITHUB LINK -->
            <div class="flex text-white font-bold mx-auto justify-center mt-8 hover:text-green-300 lg:mx-0 lg:mt-3">
                <a class="flex flex-col font-black items-baseline" href="https://github.com/Elvissamir">
                    <p class="text-5xl text-center mx-auto w-12 h-8 lg:text-4xl 2xl:text-5xl 2xl:h-12">
                        <font-awesome-icon :icon="['fab', 'github-square']" />
                    </p>
                    <p class="text-lg mt-3 lg:mt-1 lg:text-xl">Check my Github</p>
                </a>
            </div>

            <!-- MENU LINKS -->
            <div class="flex flex-col justify-center mt-3 w-6/12 mx-auto lg:flex-row lg:mx-0 lg:w-8/12 lg:justify-between lg:max-w-screen-md lg:mt-2 2xl:flex-col 2xl:mx-auto">
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
