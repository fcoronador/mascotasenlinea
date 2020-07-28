require('./bootstrap');
require( 'datatables.net-dt' )();


$(document).ready( function () {
    $('#myTable').DataTable();
} );