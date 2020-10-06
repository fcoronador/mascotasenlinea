$(document).ready(function() {

    $("#ItemHistoria").click(function() {

        $("#paneHistoria").addClass("show");
        $("#paneVacunas, #paneDespa, #paneExam, #paneControl, #paneExamenes, #paneDesparas, #panePeso ").removeClass("show").addClass("collapse");
    });

    $("#ItemVacunas").click(function() {

        $("#paneVacunas").addClass("show");
        $("#paneHistoria, #paneDespa, #paneExam, #paneControl, #paneExamenes, #paneDesparas, #panePeso ").removeClass("show").addClass("collapse");
    });

    $("#ItemDesp").click(function() {

        $("#paneDespa").addClass("show");
        $("#paneHistoria, #paneVacunas, #paneExam, #paneControl, #paneExamenes, #paneDesparas, #panePeso ").removeClass("show").addClass("collapse");
    });

    $("#ItemExamen").click(function() {

        $("#paneExam").addClass("show");
        $("#paneHistoria, #paneVacunas, #paneDespa, #paneControl, #paneExamenes, #paneDesparas, #panePeso ").removeClass("show").addClass("collapse");
    });

    $("#ItemControl").click(function() {

        $("#paneControl").addClass("show");
        $("#paneHistoria, #paneVacunas, #paneDespa, #paneExam, #paneExamenes, #paneDesparas, #panePeso ").removeClass("show").addClass("collapse");
    });

    $("#ItemPeso").click(function() {

        $("#panePeso").addClass("show");
        $("#paneHistoria, #paneVacunas, #paneDespa, #paneExam, #paneExamenes, #paneDesparas, #paneControl ").removeClass("show").addClass("collapse");
    });




});