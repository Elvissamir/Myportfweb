<template>
    <Layout>
        <div class="sections-wrapper min-h-screen">
            <div class="section-container">
                <div class="section">
                    <div class="section-header">
                        <div class="title-container">
                            <h1 class="title">My Messages: </h1>
                            <div class="title-line w-6/12"></div>
                        </div>
                        <p class="subtitle">There are: {{ messages.length }} messages to read</p>
                    </div>
                    
                    <div class="section-content">
                        <div class="message-container" v-for="(message, index) in messages" :key="index">
                            <div class="flex flex-col">
                                <div class="message-top">
                                    <p class="message-title">Title: {{ message.title }}</p>
                                    <button @click="deleteMessage(message.id)" class="delete-message-btn">X</button>
                                </div>
                                <p class="message-from">From: {{ message.email }}</p>
                            </div>
                            <div class="message-content">
                                <p>Content: </p>
                                <p>{{ message.content }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>

<script>
import { Inertia } from '@inertiajs/inertia'
import Layout from '../../Layouts/AppLayout.vue'

export default {
    components: {
        Layout,
    },
    props: {
        messages: {
            required: true,
            type: Array,
        },
    },
    setup(props) {

        console.log(props.messages);

        const deleteMessage = (messageId) => {
            Inertia.delete(`/messages/${messageId}`)
        }
        
        return {
            deleteMessage
        }
    },
}
</script>