<template>
    <div class="w-full h-full rounded-lg bg-white" :class="[]">
        <!-- PROJECT IMAGE -->
        <div class="flex h-64 w-full">
            <img class="flex rounded-t-2xl rounded-r-2xl" :src="project.image" alt="project image">
        </div>

        <!-- PROJECT DATA -->
        <div class="flex flex-col py-2 px-4 justify-center text-gray-800 font-black mt-4">
            <p class="text-2xl text-center font-playfair">{{ project.code }}</p>
            <p class="text-xl text-center font-playfair mt-1">{{ project.title }}</p>
            <p class="text-lg text-justify font-lora mt-3">{{ project.description }}</p>

            <div class="grid grid-cols-3 gap-2 mt-3">
                <div class="flex justify-center" v-for="(image, index) in project.stack" :key="index">
                    <img class="flex w-16 h-8" :src="image" alt="">
                </div>
            </div>
            <div class="flex">
                <a class="button" :href="project.githubUrl">Github</a>
                <a class="button" :href="project.demoUrl">Demo</a>
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


        return {
           
        }
    },
}
</script>