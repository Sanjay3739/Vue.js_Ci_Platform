import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';

// Import components
import App from './components/App.vue';
import login from './components/login.vue';
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
//missionApplication
import missionapplicationindex from './components/missionapplication/index.vue';
//story
import story from './components/story/index.vue';
//user
import userindex from './components/user/index.vue';
import usercreate from './components/user/create.vue';
import usershow from './components/user/show.vue';
import useredit from './components/user/edit.vue';
//banner
import bannerindex from './components/banner/index.vue';
import bannercreate from './components/banner/create.vue';
import bannershow from './components/banner/show.vue';
import banneredit from './components/banner/edit.vue';

const router = createRouter({
    history: createWebHistory(),
    routes: [

        //sidebar path
        { path: '/sidebar', component: sidebar },
        { path: '/', redirect: '/user' }, // Redirect root path to '/cmspage'

        // cms page path
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

        // missionapplication page path
        { path: '/missionapplication', component: missionapplicationindex },

        // Story page path
        { path: '/story', component: story },

        // User page path
        { path: '/user', component: userindex },
        { path: '/user/create', component: usercreate },
        { path: '/user/:user_id', component: usershow },
        { path: '/user/:user_id/edit', component: useredit },

        // Banner page path
        { path: '/banner/create', component: bannercreate },
        { path: '/banner/:banner_id/edit', component: banneredit },
        { path: '/banner/:banner_id', component: bannershow },
        { path: '/banner', component: bannerindex },

        //login page path
        { path: '/login', component: login }


    ]
});

const app = createApp(App);
app.use(router);
app.mount('#app');
