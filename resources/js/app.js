require('./bootstrap');
require('./graficas');
require('./sidebar');

$(document).ready(function() {
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
});

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