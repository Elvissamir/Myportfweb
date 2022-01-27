<template>

    <div class="flip-card">
        <div class="flip-card-inner" :class="[(flip)? 'flip':'']">
            <div class="flip-card-front">
                <div class="flip-card-top">
                    <!-- PROJECT IMAGE -->
                    <div class="flex h-48 w-full">
                        <img class="flex w-full" :src="project.image" alt="project image">
                    </div>

                    <!-- PROJECT DATA -->
                    <div class="flex flex-col py-1 px-4 justify-center font-black mt-4">
                        <p class="text-3xl text-center font-playfair md:text-4xl">{{ project.code }}</p>
                        <p class="text-lg text-center font-playfair mt-1 md:text-xl">{{ project.title }}</p>
                    </div>

                    <div class="flex justify-around mt-3">
                        <a class="button bg-gray-800 text-white border-2 border-white hover:bg-white hover:border-gray-800 hover:text-gray-800" :href="project.githubUrl">Github</a>
                        <a class="button brand-button" :href="project.demoUrl">Demo</a>
                    </div>
                </div>

                <div class="flip-button-container mt-auto">
                    <button class="flip-button py-1" @click="flipCard">
                        <p class="">Details ></p>
                    </button>
                </div>
            </div>
            <div class="flip-card-back">
                <div class="flip-card-top flex flex-col justify-center items-center">
                    <!-- DESCRIPTION -->
                    <p class="text-lg text-center font-lora">{{ project.description }}</p>
                    
                    <!-- STACK --> 
                    <p class="text-2xl text-center font-lora font-black mt-6">The stack</p>
                    <div class="grid grid-cols-3 gap-3 mt-4">
                        <div class="flex justify-center" v-for="(image, index) in project.stack" :key="index">
                            <img class="flex w-20 h-10 bg-white" :src="image" alt="">
                        </div>
                    </div>
                </div>

                <div class="flip-button-container mt-auto">
                    <button class="flip-button py-1" @click="flipCard">
                        <p class="">&lt; Back</p>
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import { ref } from 'vue'

export default {
    props: {
        project: {
            type: Object,
            required: true,
        },
    },
    setup(props) {

        const flip = ref(false);

        const flipCard = () => {
            console.log(flip.value);
            flip.value = (flip.value)? false : true;
            console.log(flip.value);
        }

        return {
           flip,
           flipCard,
        }
    },
}
</script>