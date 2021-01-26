$(document).ready(function(){
  $('input[type="radio"]').click(function(){
      var inputValue = $(this).attr("value");
      var targetBox = $("." + inputValue);
      $(".box").not(targetBox).hide();
      $(targetBox).show();
      
  });
  
  $('#ep').click(function(){ 
    document.getElementById("type").value = "Etablissement public";

    var obj_1 = document.getElementById("titre_type");
    obj_1.remove();
    var obj_2 = document.getElementById("all_type");
    obj_2.remove();
    var obj_3 = document.getElementById("hr");
    obj_3.remove();

  });
  
  $('#pm').click(function(){ 
    document.getElementById("type").value = "Personne morale";
    var obj_1 = document.getElementById("titre_type");
    obj_1.remove();
    var obj_2 = document.getElementById("all_type");
    obj_2.remove();
    var obj_3 = document.getElementById("hr");
    obj_3.remove();
  });

  $('#pp').click(function(){ 

    var obj_1 = document.getElementById("titre_type");
    obj_1.remove();
    var obj_2 = document.getElementById("all_type");
    obj_2.remove();
    var obj_3 = document.getElementById("hr");
    obj_3.remove();
    
  });
  
});