
  $(document).ready(function(){
    $("#ItemCate").click(function(){
      $("#paneCate").addClass("show");

      $("#paneSub").removeClass("show");
      $("#paneSub").addClass("collapse");

      $("#paneProd").removeClass("show");
      $("#paneProd").addClass("collapse");
    });

    $("#ItemSub").click(function(){
        $("#paneCate").removeClass("show");
        $("#paneCate").addClass("collapse");

        $("#paneSub").addClass("show");

        $("#paneProd").removeClass("show");
        $("#paneProd").addClass("collapse");
    });

    $("#ItemProd").click(function(){
        $("#paneCate").removeClass("show");
        $("#paneCate").addClass("collapse");

        $("#paneSub").removeClass("show");
        $("#paneSub").addClass("collapse");

        $("#paneProd").addClass("show");
    });

  });
