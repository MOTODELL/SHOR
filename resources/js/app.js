require("./bootstrap");
const Swal = require("sweetalert2");
window.Swal = Swal;

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
    if ($('script[src="' + host + '/lib/datatables/datatables.net/js/jquery.dataTables.js"]').length > 0) {
        App.dataTables();
        $(".dataTable").DataTable({
            dom: "Bfrtip",
            buttons: ["copy", "csv", "excel", "pdf", "print"],
            language: {
                sProcessing: "Procesando...",
                sLengthMenu: "Mostrar _MENU_ registros",
                sZeroRecords: "No se encontraron resultados",
                sEmptyTable: "Ningún dato disponible en esta tabla",
                sInfo:
                    "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                sInfoEmpty:
                    "Mostrando registros del 0 al 0 de un total de 0 registros",
                sInfoFiltered: "(filtrado de un total de _MAX_ registros)",
                sInfoPostFix: "",
                sSearch: "Buscar:",
                sUrl: "",
                sInfoThousands: ",",
                sLoadingRecords: "Cargando...",
                oPaginate: {
                    sFirst: "Primero",
                    sLast: "Último",
                    sNext: "Siguiente",
                    sPrevious: "Anterior"
                },
                oAria: {
                    sSortAscending:
                        ": Activar para ordenar la columna de manera ascendente",
                    sSortDescending:
                        ": Activar para ordenar la columna de manera descendente"
                }
            }
        });
    }
    if ($('script[src="' + host + '/lib/jquery-ui/jquery-ui.min.js"]').length > 0) {
        App.tableFilters();
    }
    if ($('script[src="' + host + '/lib/datetimepicker/js/bootstrap-datetimepicker.min.js"]').length > 0) {
        App.formElements();
    }
    if ($('script[src="' + host + '/lib/jquery.maskedinput/jquery.maskedinput.js"]').length > 0) {
        App.masks();
    }
    // if ($('script[src="' + host + '/lib/jquery.niftymodals/js/jquery.niftymodals.js"]').length > 0) {
    //     $.fn.niftyModal('setDefaults', {
    //         overlaySelector: '.modal-overlay',
    //         contentSelector: '.modal-content',
    //         closeSelector: '.modal-close',
    //         classAddAfterOpen: 'modal-show'
    //     });
    // }
    if (window.location.pathname == "/icons") {
        App.IconsFilter();
    }
});

// window.Vue = require("vue");

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
//     el: "#app"
// });
