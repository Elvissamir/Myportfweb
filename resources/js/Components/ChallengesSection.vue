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
import PreviewSection from './PreviewSection.vue'

export default {
    components: {
        PreviewSection
    },
    setup() {
        const challengesImagesUrl = '/images/challenges'
        const basechallengesUrl = 'https://aacsite.netlify.app'

        const algorithms = [
            {url: `${basechallengesUrl}/binaryTree`, title: 'Binary Tree', imageUrl: `${challengesImagesUrl}/binarytree_c.png`},
            {url: `${basechallengesUrl}/linkedList`, title: 'Linked List', imageUrl: `${challengesImagesUrl}/linkedlist_c.png`},
            {url: `${basechallengesUrl}/selectionSort`, title: 'Selection Sort', imageUrl: `${challengesImagesUrl}/selection_c.png`},
            {url: `${basechallengesUrl}/shortestPath`, title: 'Shortest Path', imageUrl: `${challengesImagesUrl}/shortest_c.png`},
        ]

        const challenges = [
            {url: `${basechallengesUrl}/stringReversal`, title: 'String Reversal', imageUrl: `${challengesImagesUrl}/stringreversal_c.png`},
            {url: `${basechallengesUrl}/palindrome`, title: 'Palindrome', imageUrl: `${challengesImagesUrl}/palindrome_c.png`},
            {url: `${basechallengesUrl}/fizzbuzz`, title: 'Fizz Buzz', imageUrl: `${challengesImagesUrl}/fizzbuzz_c.png`},
            {url: `${basechallengesUrl}/findvowels`, title: 'Find Vowels', imageUrl: `${challengesImagesUrl}/findvowels_c.png`},
            {url: `${basechallengesUrl}/maxchars`, title: 'Max Chars', imageUrl: `${challengesImagesUrl}/maxchars_c.png`},
            {url: `${basechallengesUrl}/anagram`, title: 'Anagram', imageUrl: `${challengesImagesUrl}/anagram_c.png`}
        ]

        return {
            challenges, 
            algorithms
        }
    },
}
</script>