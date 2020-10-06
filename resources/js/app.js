require('./bootstrap');
require('./datatables');
require('./graficas');
require('./sidebar');
require('./validacion');
require('./historia');

$(document).ready(function() {
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

});

$(function() {
    $('[data-toggle="popover"]').popover()
})

$(function() {
    $('[data-toggle="tooltip"]').tooltip()
})

$('#myModal').on('shown.bs.modal', function() {
    $('#myInput').trigger('focus')
})