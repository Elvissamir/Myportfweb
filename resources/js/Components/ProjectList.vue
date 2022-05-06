<template>
    <div id="projects" class="section">
        <div class="section-header">
            <div class="title-container">
                <p class="title">Projects</p>
                <div class="title-line w-6/12"></div>
            </div>
            <p class="subtitle">These are some of the projects I've developed:</p>  
        </div>

        <div class="section-content">
            <!-- PROJECT CARD -->
            <div class="projects">
                <ProjectCard v-for="(project, index) in projects" :key="index" :project="project"></ProjectCard>
            </div>
        </div>
    </div>
</template>

<script>
import ProjectCard from './ProjectCard.vue'
import allprojects from '../data/projects'

export default {
    components: {
        ProjectCard,
    },
    setup() {
    
        const projects = [...allprojects]

        return {
            projects
        }
    },
}
</script>