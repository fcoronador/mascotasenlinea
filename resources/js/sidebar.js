
  $(document).ready(function(){
    $("#ItemCliente").click(function(){
      $("#paneCliente").addClass("show");

      $("#paneMascota").removeClass("show");
      $("#paneMascota").addClass("collapse");

      $("#paneControles").removeClass("show");
      $("#paneControles").addClass("collapse");
    });

    $("#ItemMascota").click(function(){
        $("#paneCliente").removeClass("show");
        $("#paneCliente").addClass("collapse");

        $("#paneMascota").addClass("show");

        $("#paneControles").removeClass("show");
        $("#paneControles").addClass("collapse");
    });

    $("#ItemControles").click(function(){
        $("#paneCliente").removeClass("show");
        $("#paneCliente").addClass("collapse");

        $("#paneMascota").removeClass("show");
        $("#paneMascota").addClass("collapse");

        $("#paneControles").addClass("show");
    });

  });
