<template>
     <div class=" m-auto relative h-full w-full">
        <div class="arrows-container">
            <p @click="prevSlide()" class="arrow">
                <font-awesome-icon :icon="['fas', 'angle-left']" />
            </p>

            <p @click="nextSlide()" class="arrow">
                <font-awesome-icon :icon="['fas', 'angle-right']" />
            </p>
        </div>

        <div class="pics-container bg-gradient-to-l" :class="[backgroundColors]">
            <img 
                v-for="(image, index) in images" :key="index" 
                class="pic fade" :class="[(activeSlide == index)? 'block' : 'hidden', image.size]" :src="image.url" alt="">
        </div>
    </div>
</template>

<script>

import { ref } from 'vue'

export default {
    props: {
        images: {
            type: Array,
            required: true,
        },
        backgroundColors: {
            type: String,
            required: true,
        }
    },
    setup(props) {

        const activeSlide = ref(0);
        const slidesCount = props.images.length;

        const nextSlide = () => {
            if (activeSlide.value == slidesCount - 1)
                activeSlide.value = 0;
            else 
                activeSlide.value++;
        }

        const prevSlide = () => {
            if (activeSlide.value == 0)
                activeSlide.value = slidesCount - 1;
            else
                activeSlide.value--;
        }

        return {
            activeSlide,
            nextSlide,
            prevSlide,
        }
    },
}
</script>