<template>
    <transition name="fade">
        <p v-if="message && showNotification">{{ message }}</p>
    </transition>
</template>

<script>
import { ref } from 'vue'
import { onMounted } from '@vue/runtime-core'
export default {
    props: {
        message: String
    },
    setup() {
        const showNotification = ref(false)

        onMounted(() => {
            showNotification.value = true

            setTimeout(() => showNotification.value = false, 3000)
        })

        return {
            showNotification,
        }
    },
}
</script>