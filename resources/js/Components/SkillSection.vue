<template>
    <div id="skills" class="section">
        <div class="section-header">
            <div class="title-container">
                <p class="title">Skills</p>
                <div class="title-line w-6/12"></div>
            </div>  
            <p class="subtitle">These are some of the programming languages, tools and frameworks I use: </p>
        </div>

        <div class="section-content">
            <!-- SKILL BLOCKS --> 
            <div class="skills-container">
                <div class="flex justify-center">
                    <div class="flex justify-center card mr-4">
                        <p class="card-content text-green-400"><font-awesome-icon :icon="['fab', 'node-js']" /></p>
                    </div>
                </div>

                <div class="flex justify-center mt-4">
                    <div class="flex justify-center card mr-4">
                        <p class="card-content text-blue-400"><font-awesome-icon :icon="['fab', 'react']" /></p>
                    </div>

                    <div class="flex justify-center card mr-4">
                        <p class="card-content text-red-400"><font-awesome-icon :icon="['fab', 'laravel']" /></p>
                    </div>

                    <div class="flex justify-center card">
                        <p class="card-content text-green-600"><font-awesome-icon :icon="['fab', 'vuejs']" /></p>
                    </div>
                </div>

                <div class="flex justify-center mt-4">
                    <div class="flex justify-center card mr-4">
                        <p class="card-content text-yellow-600"><font-awesome-icon :icon="['fab', 'html5']" /></p>
                    </div>

                    <div class="flex justify-center card mr-4">
                        <p class="card-content text-blue-400"><font-awesome-icon :icon="['fab', 'css3']" /></p>
                    </div>

                    <div class="flex justify-center card mr-4">
                        <p class="card-content text-yellow-300"><font-awesome-icon :icon="['fab', 'js']" /></p>
                    </div>

                    <div class="flex justify-center card">
                        <p class="card-content"><img class="flex h-8 md:h-10" src="/images/BrandLogos/tailwind.png" alt=""></p>
                    </div>
                </div>

                <div class="flex justify-center mt-4">
                    <div class="flex justify-center card mr-4">
                        <p class="card-content"><img class="flex h-6 md:h-8" src="/images/BrandLogos/git.png" alt=""></p>
                    </div>
                    
                    <div class="flex justify-center card mr-4">
                        <p class="card-content text-red-500"><font-awesome-icon :icon="['fab', 'npm']" /></p>
                    </div>

                    <div class="flex justify-center card">
                        <p class="card-content"><img class="flex h-6 md:h-8" src="/images/BrandLogos/mysql.png" alt=""></p>
                    </div>
                </div>

                <div class="flex justify-center mt-4">
                    <div class="flex justify-center card">
                        <p class="card-content text-black"><font-awesome-icon :icon="['fab', 'github']" /></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    setup() {
        
    },
}
</script>