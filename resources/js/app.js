require('./bootstrap');

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faCog, faDatabase, faGlobe, faEnvelope, faBars } from '@fortawesome/free-solid-svg-icons'
import { faCss3, faGit, faGithub, faGithubSquare, faHtml5, faJs, faLaravel, faLinkedin, faNodeJs, faNpm, faReact, faVuejs } from '@fortawesome/free-brands-svg-icons'

const brandIcons = [faReact, faLaravel, faVuejs, faHtml5, faCss3, faJs, faGit, faGithub, faNodeJs, faNpm, faGithubSquare, faLinkedin];
const solidIcons = [faCog, faDatabase, faEnvelope, faGlobe, faBars];

solidIcons.forEach(icon => library.add(icon));
brandIcons.forEach(icon => library.add(icon));

createInertiaApp({
    title: (title) => `${title}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .component('font-awesome-icon', FontAwesomeIcon)
            .use(plugin)
            .mixin({ methods: { route } })
            .mount(el)
    },
});

InertiaProgress.init({ color: '#4B5563' });
