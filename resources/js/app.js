require('./bootstrap');
require('./datatables');
require('./graficas');
require('./sidebar');
require('./validacion');

$(document).ready(function() {
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
  
});

$(function () {
    $('[data-toggle="popover"]').popover()
})

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})


$(document).ready(function() {
    $('#table_id').DataTable();
});

$(document).ready(function() {
    $('#mascotas').DataTable();
});

$(document).ready(function() {
    $('#controles').DataTable();
});

$(document).ready(function() {
    $('#citas').DataTable();
});
$(document).ready(function() {
    $('#prodce').DataTable();
});
$(document).ready(function() {
    $('#exa').DataTable();
});
$(document).ready(function() {
    $('#despara').DataTable();
});
$(document).ready(function() {
    $('#servi').DataTable();
});
$(document).ready(function() {
    $('#veter').DataTable();
});