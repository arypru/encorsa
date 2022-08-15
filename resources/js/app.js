require('./bootstrap');

// Import modules...
import Vue from 'vue';
import { App as InertiaApp, plugin as InertiaPlugin } from '@inertiajs/inertia-vue';
import PortalVue from 'portal-vue';
import Vuetify from "../plugins/vuetify"
import 'material-design-icons-iconfont/dist/material-design-icons.css'
import AOS from "aos";
import "aos/dist/aos.css";

import VueLayers from 'vuelayers'
import 'vuelayers/lib/style.css' // needs css-loader

import { LMap, LTileLayer, LMarker } from 'vue2-leaflet';
import 'leaflet/dist/leaflet.css';

Vue.component('l-map', LMap);
Vue.component('l-tile-layer', LTileLayer);
Vue.component('l-marker', LMarker);

Vue.mixin({ methods: { route } });
Vue.use(InertiaPlugin);
Vue.use(PortalVue);
Vue.use(VueLayers)

const app = document.getElementById('app');

new Vue({
    created(){
        AOS.init();
    },
    vuetify: Vuetify,
    render: (h) =>
        h(InertiaApp, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                resolveComponent: (name) => require(`./Pages/${name}`).default,
            },
        }),
}).$mount(app);
