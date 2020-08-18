
  $(document).ready(function(){
    $("#ItemCliente").click(function(){

      $("#paneCliente").addClass("show");
      $("#paneMascota, #paneControles").removeClass("show").addClass("collapse");
      
    });

    $("#ItemMascota").click(function(){
        
        $("#paneMascota").addClass("show");
        $("#paneCliente, #paneControles").removeClass("show").addClass("collapse");
    });

    $("#ItemControles").click(function(){
        
        $("#paneControles").addClass("show");
        $("#paneCliente, #paneMascota").removeClass("show").addClass("collapse");
    });

  });
