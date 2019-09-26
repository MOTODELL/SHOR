/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

$(document).ready(function() {
    //initialize the javascript
    App.init();
    App.megaMenu();

    // Obtiene la url actual
    // Esto para que solo inicialice las librerías que se importaron en la vista actual
    var protocol = location.protocol;
    var slashes = protocol.concat("//");
    var host = slashes.concat(window.location.host);

    //-Runs prettify
    if ($('script[src="' + host + '/lib/prettify/prettify.js"]').length > 0) {
        prettyPrint();
    }
    if (
        $(
            'script[src="' +
                host +
                '/lib/datatables/datatables.net/js/jquery.dataTables.js"]'
        ).length > 0
    ) {
        App.tableFilters();
    }

    if (window.location.pathname == "/icons") {
        App.IconsFilter();
    }

    // if (window.location.pathname == '/icons') {
    //     App.IconsFilter();
    // }
});

// window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });
