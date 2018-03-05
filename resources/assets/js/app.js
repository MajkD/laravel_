
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';

window.Vue.use(VueRouter);

import SkillsIndex from './components/skills/SkillsIndex.vue';
import SkillsCreate from './components/skills/SkillsCreate.vue';
import SkillsEdit from './components/skills/SkillsEdit.vue';
 
const routes = [
    {
        path: '/',
        components: {
            skillsIndex: SkillsIndex
        }
    },
    {path: '/skills/create', component: SkillsCreate, name: 'createSkill'},
    {path: '/skills/edit/:id', component: SkillsEdit, name: 'editSkill'},
]
 
const router = new VueRouter({ routes });
 
const app = new Vue({ router }).$mount('#app');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });
