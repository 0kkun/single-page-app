
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

//Vue.jsの読み込み
window.Vue = require('vue'); 

// Vue Routerの読み込み
import VueRouter from 'vue-router'; 

// Vue.jsで、Vue Routerを使うように設定
Vue.use(VueRouter); 

// vue-routerによるルーティング設定
const router = new VueRouter({
    mode: 'history',
    routes: [
        { path: '/', component: require('./components/list.vue').default, name: 'list' }, // ルートでアクセスしたら、List.vueを表示
        { path: '/create', component: require('./components/Form.vue').default, name: 'create' }, // createにアクセスしたらForm.vueを表示
        { path: '/:id', component: require('./components/Detail.vue').default, name: 'detail' }, // id番号でアクセスしたらDetail.vueを表示
    ]
});

// Vueのコンポーネント。ページ上部にメニューバーを表示させたいので、Navbar.vueを登録
Vue.component('navbar', require('./components/Navbar.vue').default); 

// Vue.jsの実行
const app = new Vue({
    router
}).$mount('#app');
