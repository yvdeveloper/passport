//import './bootstrap';
import Vue from 'vue';
import ContactList from './components/ContactList.vue';
import ContactCreate from './components/ContactCreate.vue';
import ContactEdit from './components/ContactEdit.vue';
import ContactDelete from './components/ContactDelete.vue';

Vue.component('contact-list', ContactList);
Vue.component('contact-create', ContactCreate);
Vue.component('contact-edit', ContactEdit);
Vue.component('contact-delete', ContactDelete);

const app = new Vue({
    el: '#app',
});