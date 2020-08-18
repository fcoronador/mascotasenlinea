
  $(document).ready(function(){
    $("#ItemCliente").click(function(){

      $("#paneCliente").addClass("show");
      $("#paneMascota, #paneControles, #paneVacunas, #paneProcedimientos, #paneExamenes, #paneDesparas, #paneServicios, #paneCitas, #paneVete").removeClass("show").addClass("collapse");
      
    });

    $("#ItemMascota").click(function(){
        
        $("#paneMascota").addClass("show");
        $("#paneCliente, #paneControles, #paneVacunas, #paneProcedimientos, #paneExamenes, #paneDesparas, #paneServicios, #paneCitas, #paneVete").removeClass("show").addClass("collapse");
    });

    $("#ItemControles").click(function(){
        
        $("#paneControles").addClass("show");
        $("#paneMascota, #paneCliente, #paneVacunas, #paneProcedimientos, #paneExamenes, #paneDesparas, #paneServicios, #paneCitas, #paneVete").removeClass("show").addClass("collapse");
    });

    $("#ItemProcedimientos").click(function(){
        
        $("#paneProcedimientos").addClass("show");
        $("#paneMascota, #paneCliente, #paneVacunas,#paneControles , #paneExamenes, #paneDesparas, #paneServicios, #paneCitas, #paneVete").removeClass("show").addClass("collapse");
    });
    $("#ItemVacunas").click(function(){
        
        $("#paneVacunas").addClass("show");
        $("#paneMascota, #paneCliente, #paneControles , #paneProcedimientos, #paneExamenes, #paneDesparas, #paneServicios, #paneCitas, #paneVete").removeClass("show").addClass("collapse");
    });
    $("#ItemExamenes").click(function(){
        
        $("#paneExamenes").addClass("show");
        $("#paneMascota, #paneCliente, #paneVacunas, #paneProcedimientos,#paneControles  , #paneDesparas, #paneServicios, #paneCitas, #paneVete").removeClass("show").addClass("collapse");
    });
    $("#ItemDesparas").click(function(){
        
        $("#paneDesparas").addClass("show");
        $("#paneMascota, #paneCliente, #paneVacunas, #paneProcedimientos, #paneExamenes, #paneControles , #paneServicios, #paneCitas, #paneVete").removeClass("show").addClass("collapse");
    });
    $("#ItemServicios").click(function(){
        
        $("#paneServicios").addClass("show");
        $("#paneMascota, #paneCliente, #paneVacunas, #paneProcedimientos, #paneExamenes, #paneDesparas,#paneControles , #paneCitas, #paneVete").removeClass("show").addClass("collapse");
    });
    $("#ItemCitas").click(function(){
        
        $(" #paneCitas").addClass("show");
        $("#paneMascota, #paneCliente, #paneVacunas, #paneProcedimientos, #paneExamenes, #paneDesparas, #paneServicios,#paneControles, #paneVete").removeClass("show").addClass("collapse");
    });
    $("#ItemVete").click(function(){
        
        $("#paneVete").addClass("show");
        $("#paneMascota, #paneCliente, #paneVacunas, #paneProcedimientos, #paneExamenes, #paneDesparas, #paneServicios, #paneCitas,#paneControles ").removeClass("show").addClass("collapse");
    });





  });
