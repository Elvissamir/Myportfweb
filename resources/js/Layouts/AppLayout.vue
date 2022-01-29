<template>
    <div>
        <Head :title="title" />

        <jet-banner />

        <div class="min-h-screen w-full relative">

            <!-- NAVBAR -->
            <Navbar :show="show"></Navbar>

            <!-- MOBILE MENU -->
            <Mobilemenu @toggle-navbar="showNavbar"></Mobilemenu>

            <!-- Page Content -->
            <main>
                <slot></slot>
            </main>

            <!-- FOOTER -->
            <Footer></Footer>
        </div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import JetApplicationMark from '@/Jetstream/ApplicationMark.vue'
    import JetBanner from '@/Jetstream/Banner.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import Navbar from '../Components/Navbar.vue'
    import Mobilemenu from '../Components/Mobilemenu.vue'
    import Footer from '../Components/Footer.vue'

    export default defineComponent({
        props: {
            title: String,
        },
        components: {
            Head,
            Navbar,
            Mobilemenu,
            Footer,
            JetApplicationMark,
            JetBanner,
            Link,
        },
        data() {
            return {
                showingNavigationDropdown: false,
                show: false,
                screenWidth: window.innerWidth,
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

            showNavbar (event) {
               this.show = event;
            },

            checkScreenWidth () {

                if (this.screenWidth >= 1024)
                    this.show = true;
            }
        },
        mounted: function() {

            window.addEventListener('resize', () => {
                this.screenWidth = window.innerWidth;
            })

            this.checkScreenWidth();
        },
        watch: {
            screenWidth: function () {
                this.checkScreenWidth();
            }
        }
    })
</script>
