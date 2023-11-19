const bootstrap = require('./bootstrap');
import 'alpinejs';
import '../css/app.css';
import 'datatables.net';
import 'datatables.net-bs4/js/dataTables.bootstrap4.js';
window.$ = window.jQuery = require('jquery');

$(document).ready(function() {
    // Define 'table' in the higher scope to be accessible throughout this function
    let table;

    // Function to renumber table rows
    function renumberTable(tableSelector) {
        tableSelector.find('tbody tr').each(function(index, row) {
            $(row).find('td:first').html(index + 1);
        });
    }

    // Initialize DataTables for tables with class 'data-table', if they exist
    if ($('.data-table').length) {
        table = $('.data-table').DataTable({
            // DataTable options
            responsive: true,
            paging: true,
            ordering: true,
            info: true,
            autoWidth: false,
            buttons: ['copy', 'excel', 'pdf'],
            dom: "<'row'<'col-sm-12 col-md-6'f><'col-sm-12 col-md-6 text-md-right'l>>" +
                 "<'row'<'col-sm-12'tr>>" +
                 "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            language: {
                search: "Suche:",
                searchPlaceholder: "Suche...",
                lengthMenu: "Zeige _MENU_ Einträge",
                info: "Zeigt _START_ bis _END_ von _TOTAL_ Einträgen",
                infoEmpty: "Zeigt 0 bis 0 von 0 Einträgen",
                infoFiltered: "(gefiltert von _MAX_ Einträgen)",
                paginate: {
                    first: "Erste",
                    last: "Letzte",
                    next: "Nächste",
                    previous: "Vorherige"
                },
                aria: {
                    sortAscending: ": aktivieren, um Spalte aufsteigend zu sortieren",
                    sortDescending: ": aktivieren, um Spalte absteigend zu sortieren"
                },
                buttons: {
                    copyTitle: 'In die Zwischenablage kopieren',
                    copySuccess: {
                        _: '%d Zeilen kopiert',
                        1: '1 Zeile kopiert'
                    }
                }
            },
            initComplete: function() {
                console.log('DataTable initialization complete');
            }
        });

        // Event handler for delete buttons within the DataTable
        $('.data-table tbody').on('click', '.delete-btn', function() {
            let row = $(this).closest('tr');
            table.row(row).remove().draw(false); // 'false' to prevent auto page reset
            renumberTable($('.data-table')); // Renumber the rows in the table
        });
    }

    // Apply custom search functionality
    if ($('#dataTables-search-input').length && typeof table !== 'undefined') {
        let customSearchInput = $('#dataTables-search-input');
        customSearchInput.on('keyup change clear', function() {
            table.search(this.value).draw();
        });
    }

    // Toggle functionality for the submenu
    $('.menu-item > .arrow').on('click', function() {
        let $submenu = $(this).closest('.menu-item').next('.submenu');
        $submenu.slideToggle(); // Using slideToggle for a smooth effect
        $(this).closest('.menu-item').toggleClass('active');
    });

    // Ensure the submenu stays open for the active page
    $('.submenu').each(function() {
        let submenu = $(this);
        submenu.find('a').each(function() {
            if (window.location.href.indexOf($(this).attr('href')) > -1) {
                submenu.show();
                submenu.prev('.menu-item').addClass('active');
            }
        });
    });
});
