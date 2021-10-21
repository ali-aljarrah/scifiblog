require('./bootstrap');
window.Vue = require('vue')

import common from './common.js'
import ViewUI from 'view-design'
import locale from 'view-design/dist/locale/en-US'
import Vue from 'vue'
import moment from 'moment'
Vue.filter('timeformat', (arg) =>{
    return moment(arg).format("ll");
})

Vue.config.devtools = false
Vue.mixin(common)
Vue.use(ViewUI, { locale })


Vue.component('comment', require('./components/comment.vue').default)
Vue.component('dropdowncat', require('./components/dropdowncat.vue').default)
Vue.component('categoriessort', require('./components/categoriessort.vue').default)
const app = new Vue({
    el: '#app'
})

