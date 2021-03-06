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
    if ($('script[src="' + host + '/lib/datatables/datatables.net/js/jquery.dataTables.js"]' ).length > 0) {
        $.fn.dataTable.ext.search.push(function(e, t, i, o, n) {
            var user = $("#check-user").is(":checked"),
                analista = $("#check-analist").is(":checked"),
                doctor = $("#check-doctor").is(":checked"),
                admin = $("#check-admin").is(":checked"),
                pendiente = $("#check-pendiente").is(":checked"),
                pagado = $("#check-pagado").is(":checked"),
                cancelado = $("#check-cancelado").is(":checked"),
                m = $(e.aoData[i].nTr).attr("class").split(" ");
    
            return (
                (
                    (0 == user && 0 == analista && 0 == doctor && 0 == admin && 0 == pendiente && 0 == pagado && 0 == cancelado) ||
                    (1 == user && "usuario" == m[1]) ||
                    (1 == analista && "analist" == m[1]) ||
                    (1 == doctor && "doctor" == m[1]) ||
                    (1 == admin && "admin" == m[1]) ||
                    (1 == pendiente && "pendiente" == m[1]) ||
                    (1 == pagado && "pagado" == m[1]) ||
                    (1 == cancelado && "cancelado" == m[1]) 
                )
            );
        });
        var e = $(".dataTable").DataTable({
            pageLength: 10,
            order: [[ 0, "desc" ]],
            dom: "<'row be-datatable-body'<'col-sm-12'tr>><'row be-datatable-footer'<'col-sm-5'i><'col-sm-7'p>>",
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
        $("#check-user, #check-analist, #check-doctor, #check-admin, #check-pendiente, #check-pagado, #check-cancelado").on("click", function() {
            e.draw();
        });
        $('#search').keyup(function(){
            e.search($(this).val()).draw() ;
        });
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
    if ($('.select2-tags').length > 0) {
        $(".select2-tags").select2({
            width: "100%",
            placeholder: "Crea o selecciona una localidad",
            tags: true
        });
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
