<template>
    <div>
        <Head :title="title" />

        <jet-banner />

        <div class="min-h-screen bg-white w-full relative">
            <nav class="bg-gray-800 w-2/12 fixed">
                <!-- 768 PX -->
                <div class="flex flex-col w-full h-screen justify-center items-center">
                    <!-- my photo -->
                    <div class="flex mx-auto">
                        <div class="w-7 h-7 rounded-md"></div>
                    </div>

                    <!-- GITHUB Link -->
                    <div class="flex text-white font-bold mt-2 mx-auto justify-center">
                        <a class="flex flex-col font-black items-baseline" href="">
                            <p class="text-lg">Check my Github</p>
                            <p class="text-5xl text-center mx-auto w-12 h-8 mt-3">
                                <font-awesome-icon :icon="['fab', 'github-square']" />
                            </p>
                        </a>
                    </div>

                    <!-- menu links -->
                    <div class="flex flex-col justify-center text-lg font-bold mt-3 w-6/12 mx-auto">
                        <a class="nav-link" href="#start">Start</a>
                        <a class="nav-link" href="#skills">Skills</a>
                        <a class="nav-link" href="#projects">Projects</a>
                        <a class="nav-link" href="#education">Education</a>
                        <a class="nav-link" href="#challenges">Challenges</a>
                        <a class="nav-link" href="#about">About Me</a>
                        <a class="nav-link" href="#contact">Contact Me</a>
                    </div>
                </div>

                <!-- 320 PX -->
                <div class="">

                </div>
            </nav>

            <!-- Page Heading -->
            <header class="bg-white shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header"></slot>
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot></slot>
            </main>

            <!-- FOOTER -->
                  <!-- FOOTER -->
            <footer class="bg-gray-800 w-10/12 ml-auto">
                <div class="flex flex-col w-10/12 mx-auto py-8 text-white text-lg font-montserrat">

                    <!-- LINKS -->
                    <div class="flex flex-col mx-auto">
                        <div class=" flex w-full mb-1 justify-center">
                            <p class="font-bold">My Social Networks:</p>
                        </div>

                        <div class="flex">
                            <div class="flex items-baseline font-bold">
                                <p class="flex items-center text-sm sm:text-base">
                                    <font-awesome-icon :icon="['fas', 'envelope']" class="mr-2"/>
                                    Elvissamir18@gmail.com
                                </p>
                            </div>
                        </div>

                        <div class="flex justify-between mt-2 mx-auto text-lg font-black">
                            <div class="flex">
                                <a href="">
                                    <font-awesome-icon :icon="['fas', 'globe']" size="lg"/>
                                </a>
                            </div>
                                
                            <div class="flex ml-3">
                                <a href="https://github.com/Elvissamir">
                                    <font-awesome-icon :icon="['fab', 'github']" size="lg" />
                                </a>
                            </div>

                            <div class="flex ml-3">
                                <a class="ml-2" href="">
                                    <font-awesome-icon :icon="['fab', 'linkedin']" size="lg" />
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- INFO -->
                    <div class="flex flex-col mt-3 mx-auto items-center text-center">
                        <div class="flex flex-wrap justify-center font-bold">
                            <div class="flex flex-wrap items-baseline">
                                <font-awesome-icon :icon="['fas', 'cog']" size="lg" class="my-auto"/>
                                <p class="ml-1">Designed</p>
                                <p class="ml-1">&</p>
                                <p class="ml-1">Developed</p>
                            </div>
                            <p class="ml-1">by</p>
                            <p class="ml-1">Elvis Carrasco</p>
                        </div>
                        <p class="font-bold mt-2">
                            My website!
                        </p>
                        <p class="font-bold">
                            2021
                        </p>
                    </div>

                </div>
            </footer>

        </div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import JetApplicationMark from '@/Jetstream/ApplicationMark.vue'
    import JetBanner from '@/Jetstream/Banner.vue'
    import JetDropdown from '@/Jetstream/Dropdown.vue'
    import JetDropdownLink from '@/Jetstream/DropdownLink.vue'
    import JetNavLink from '@/Jetstream/NavLink.vue'
    import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        props: {
            title: String,
        },

        components: {
            Head,
            JetApplicationMark,
            JetBanner,
            JetDropdown,
            JetDropdownLink,
            JetNavLink,
            JetResponsiveNavLink,
            Link,
        },

        data() {
            return {
                showingNavigationDropdown: false,
            }
        },

        methods: {
            switchToTeam(team) {
                this.$inertia.put(route('current-team.update'), {
                    'team_id': team.id
                }, {
                    preserveState: false
                })
            },

            logout() {
                this.$inertia.post(route('logout'));
            },
        }
    })
</script>
