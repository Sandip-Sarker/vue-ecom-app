import './bootstrap';
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap-icons/font/bootstrap-icons.css';

import './Assets/CSS/sidebar.css'
import './Assets/CSS/style.css'
import './Assets/CSS/animate.min.css'
import './Assets/CSS/bootstrap.css'
import './Assets/CSS/dropdownmenu.css'
import './Assets/CSS/fontawesome.css'
import './Assets/CSS/jquery.dataTables.min.css'
import './Assets/CSS/progress.css'
import './Assets/CSS/toastify.min.css'

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/${name}.vue`]
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el)
    },
})
