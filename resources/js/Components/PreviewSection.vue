<template>
    <div v-for="(element, i) in elements" :key="i" class="preview-link">
        <div class="preview-overlay">
            <p class="preview-text">{{ element.title }}</p>
            <a :href="element.url" class="button brand-button mt-3">Visit</a>
        </div>
        <img class="preview-image" :src="element.imageUrl" alt="Linked List">
    </div>
</template>

<script>
export default {
    props: {
        elements: {
            type: Array,
            required: true,
        }
    },
    setup() {
        
    },
}
</script>