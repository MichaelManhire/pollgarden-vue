require('./bootstrap');

// Import modules...
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import AppLayout from './Layouts/App';

const el = document.getElementById('app');

createInertiaApp({
    resolve: (name) => {
        const page = require(`./Pages/${name}`).default
        page.layout = page.layout || AppLayout
        return page
    },
    setup({ el, app, props, plugin }) {
        createApp({ render: () => h(app, props) })
            .mixin({ methods: { route } })
            .use(plugin)
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });
