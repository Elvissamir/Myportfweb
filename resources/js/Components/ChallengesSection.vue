<template>
    <div id="challenges"  class="section">
        <div class="section-header">
            <div class="title-container">
                <p class="title">Challenges</p>
                <div class="title-line w-6/12"></div>
            </div>
            <p class="subtitle">Here are some common and cool algorithms and coding challenges with UI: </p>
        </div>

        <div class="section-content">
            <div class="preview-section">
                <PreviewSection :elements="algorithms"></PreviewSection>
                <PreviewSection :elements="challenges"></PreviewSection>    
            </div>
        </div> 
    </div>
</template>

<script>
import mychallenges from '../data/challenges'
import myalgorithms from '../data/algorithms'
import PreviewSection from './PreviewSection.vue'

export default {
    components: {
        PreviewSection
    },
    setup() {
        
        const algorithms = [...myalgorithms]
        const challenges = [...mychallenges]

        return {
            challenges, 
            algorithms
        }
    },
}
</script>