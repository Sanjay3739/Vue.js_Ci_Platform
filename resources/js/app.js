import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';

// Import components
import App from './components/App.vue';
//sidebar
import sidebar from './components/sidebar.vue';
// cms page
import index from './components/cmspage/index.vue';
import create from './components/cmspage/create.vue';
import show from './components/cmspage/show.vue';
import edit from './components/cmspage/edit.vue';
//mission skill
import missionskillindex from './components/missionskill/index.vue';
import missionskillcreate from './components/missionskill/create.vue';
import missionskillshow from './components/missionskill/show.vue';
import missionskilledit from './components/missionskill/edit.vue';
//mission theme
import missionthemeindex from './components/missiontheme/index.vue';
import missionthemecreate from './components/missiontheme/create.vue';
import missionthemeshow from './components/missiontheme/show.vue';
import missionthemeedit from './components/missiontheme/edit.vue';
const router = createRouter({
    history: createWebHistory(),
    routes: [

        //sidebar path
        { path: '/sidebar', component: sidebar },

        // cms page path
        { path: '/', redirect: '/sidebar' }, // Redirect root path to '/cmspage'
        { path: '/cmspage', component: index },
        { path: '/cmspages/create', component: create },
        { path: '/cmspages/:cms_page_id', component: show },
        { path: '/cmspages/:cms_page_id/edit', component: edit },

        // mission skill page path
        { path: '/missionskill', component: missionskillindex },
        { path: '/missionskill/create', component: missionskillcreate },
        { path: '/missionskill/:skill_id', component: missionskillshow },
        { path: '/missionskill/:skill_id/edit', component: missionskilledit },

        // mission theme page path
        { path: '/missiontheme', component: missionthemeindex },
        { path: '/missiontheme/create', component: missionthemecreate },
        { path: '/missiontheme/:mission_theme_id', component: missionthemeshow },
        { path: '/missiontheme/:mission_theme_id/edit', component: missionthemeedit },

    ]
});

const app = createApp(App);
app.use(router);
app.mount('#app');
