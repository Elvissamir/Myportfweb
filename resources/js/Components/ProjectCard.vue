<template>

    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <!-- PROJECT IMAGE -->
                <div class="flex h-64 w-full">
                    <img class="flex" :src="project.image" alt="project image">
                </div>

                 <!-- PROJECT DATA -->
                <div class="flex flex-col py-2 px-4 justify-center font-black mt-4">
                    <p class="text-3xl text-center font-playfair">{{ project.code }}</p>
                    <p class="text-lg text-center font-playfair mt-1">{{ project.title }}</p>
                </div>

                <div class="flex justify-around mt-2">
                    <a class="button text-white border-2 hover:bg-white hover:text-gray-800" :href="project.githubUrl">Github</a>
                    <a class="button brand-button" :href="project.demoUrl">Demo</a>
                </div>
            </div>
            <div class="flip-card-back">
                <!-- DESCRIPTION -->
                <p class="text-lg font-lora">{{ project.description }}</p>
                
                <!-- STACK --> 
                <p class="text-2xl text-center font-lora font-black mt-6">The stack</p>
                <div class="grid grid-cols-3 gap-3 mt-4">
                    <div class="flex justify-center" v-for="(image, index) in project.stack" :key="index">
                        <img class="flex w-20 h-10 bg-white" :src="image" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    props: {
        project: {
            type: Object,
            required: true,
        },
    },
    setup(props) {


        return {
           
        }
    },
}
</script>