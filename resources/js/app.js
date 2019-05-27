
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import swal from 'sweetalert';

import VModal from 'vue-js-modal'

Vue.use(VModal)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data: {
    	iform: {
    		type: '',
            origin: '',
            originn: ''
    	},
        finput: {
            color: 'bg-secondary'
        },
        finput2: {
            color: 'bg-primary',
            is_disabled: false
        },
        finput3: {
            color: 'bg-primary',
            is_disabled: false
        },
        workplace: {
            is_disabled: true
        }
    },
    methods: {
        changeTwo() {
            this.finput2.color = 'bg-green'
            this.finput3.is_disabled = true
        },
        changeThree() {
            this.finput3.color = 'bg-green'
            this.finput2.is_disabled = true
        },
    	showModal(modal) {
    		this.$modal.show(modal);
    	},
    	hideModal(modal) {
			this.$modal.hide(modal);
		}
    }
});
