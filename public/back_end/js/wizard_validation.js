
// *******  Wizard and validation  ****** //



// ******************************* Personne Morale *****************************//


$(document).ready(function(){
 
    var element1 = document.getElementById("1PM");  
    var element2 = document.getElementById("2PM");
    var element3 = document.getElementById("3PM");  
    var element4 = document.getElementById("4PM");
    var element5 = document.getElementById("5PM");
    var element6 = document.getElementById("6PM");
    var element7 = document.getElementById("7PM");


    $('#btn_suivant_pm').click(function(){
        
        var error_raison_sociale_client_pm = '';

        if($.trim($('#raison_sociale_client_pm').val()).length == 0)
        {
            error_raison_sociale_client_pm = 'Veuillez fournir un raison sociale .';
            $('#error_raison_sociale_client_pm').text(error_raison_sociale_client_pm);
            $('#raison_sociale_client_pm').removeClass('form-control is-valid');
            $('#raison_sociale_client_pm').addClass('has-error');
            $('#raison_sociale_client_pm').addClass('form-control is-invalid');
        }
        else
        {
            error_raison_sociale_client_pm = '';
            $('#error_raison_sociale_client_pm').text(error_raison_sociale_client_pm);
            $('#raison_sociale_client_pm').removeClass('has-error');
            $('#raison_sociale_client_pm').removeClass('form-control is-invalid'); 
            $('#raison_sociale_client_pm').addClass('form-control is-valid');
        }

        if(error_raison_sociale_client_pm != '')
        {
            return false;
        }else{
            $('#list_donnees_client_pm').removeClass('active active_tab1');
            $('#list_donnees_client_pm').removeAttr('href data-toggle');
            $('#donnees_client_pm').removeClass('active');
            $('#donnees_client_pm').addClass('fade');
            element1.classList.remove("icon-done_all");
            $('#list_donnees_client_pm').addClass('inactive_tab1');
            $('#list_coordonnees_client_pm').removeClass('inactive_tab1');
            $('#list_coordonnees_client_pm').addClass('active_tab1 active');
            $('#coordonnees_client_pm').removeClass('fade');
            $('#coordonnees_client_pm').addClass('active');
            element2.classList.add("icon-done_all");

        }


    });

    $('#previous_btn_coordonnees_client_pm').click(function(){ 
        $('#list_coordonnees_client_pm').removeClass('active active_tab1');
        $('#list_coordonnees_client_pm').removeAttr('href data-toggle');
        $('#coordonnees_client_pm').removeClass('active');
        $('#coordonnees_client_pm').addClass('fade');
        element2.classList.remove("icon-done_all");
        $('#list_coordonnees_client_pm').addClass('inactive_tab1');
        $('#list_donnees_client_pm').removeClass('inactive_tab1');
        $('#list_donnees_client_pm').addClass('active_tab1 active');
        $('#list_donnees_client_pm').attr('href', '#donnees_client_pm');
        $('#list_donnees_client_pm').attr('data-toggle', 'tab');
        $('#donnees_client_pm').removeClass('fade');
        $('#donnees_client_pm').addClass('active');
        element1.classList.add("icon-done_all");
    });


    $('#btn_coordonnees_client_pm').click(function(){


         
      var error_email_pm = '';
      var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;


      // number of all rows existe en ajouterclient.html.twig en haut 
      var number_email = document.getElementById("number_email").innerText;

      // recuperer email dans input
      var email_pm = document.getElementById('email_pm').value;


      
      
    if($.trim($('#email_pm').val()).length != 0)
    {
       if (!filter.test($('#email_pm').val()))
       {
        error_email_pm = "Cette adresse email n'est pas valide .";
        $('#error_email_pm').text(error_email_pm);
        $('#email_pm').removeClass('form-control is-valid');
        $('#email_pm').addClass('has-error');
        $('#email_pm').addClass('form-control is-invalid');
       }
       else
       {
            for (var i = 1; i <= number_email; i++) { 
                    
                // recuperer tous les emails selon i
                var span_email = document.getElementById(i).innerText; 
        
                // if email dans input est egal list emails
                    if(email_pm == span_email){
        
                        error_email_pm = 'Cette adresse e-mail existe déjà !';
                        $('#error_email_pm').text(error_email_pm);
                        $('#email_pm').removeClass('form-control is-valid');
                        $('#email_pm').addClass('has-error');
                        $('#email_pm').addClass('form-control is-invalid');
                    }
        
            }
       }
    }else{

        error_email_pm = '';
        $('#error_email_pm').text(error_email_pm);
        $('#email_pm').removeClass('is-invalid');
        
        
    }



      if(error_email_pm != '')
      {
       return false;
      }
      else
      {  
       $('#list_coordonnees_client_pm').removeClass('active active_tab1');
       $('#list_coordonnees_client_pm').removeAttr('href data-toggle');
       $('#coordonnees_client_pm').removeClass('active');
       $('#coordonnees_client_pm').addClass('fade');
       element2.classList.remove("icon-done_all");
       $('#list_mobile_pm').removeClass('inactive_tab1');
       $('#list_mobile_pm').addClass('active_tab1 active');
       $('#list_mobile_pm').attr('href', '#mobile_pm');
       $('#list_mobile_pm').attr('data-toggle', 'tab');
       $('#mobile_pm').removeClass('fade');
       $('#mobile_pm').addClass('active');
       element3.classList.add("icon-done_all");
      }



       
    });  
    
    
    $('#previous_btn_mobile_client_pm').click(function(){ 
        $('#list_mobile_pm').removeClass('active active_tab1');
        $('#list_mobile_pm').removeAttr('href data-toggle');
        $('#mobile_pm').removeClass('active');
        $('#mobile_pm').addClass('fade');
        element3.classList.remove("icon-done_all");
        $('#list_mobile_pm').addClass('inactive_tab1');
        $('#list_coordonnees_client_pm').removeClass('inactive_tab1');
        $('#list_coordonnees_client_pm').addClass('active_tab1 active');
        $('#list_coordonnees_client_pm').attr('href', '#coordonnees_client_pm');
        $('#list_coordonnees_client_pm').attr('data-toggle', 'tab');
        $('#coordonnees_client_pm').removeClass('fade');
        $('#coordonnees_client_pm').addClass('active');
        element2.classList.add("icon-done_all");
   });

      

   $('#btn_mobile_client_pm').click(function(){
    
    var error_mobile_pm = '';
    var error_titre_tel_pm = '';
    var error_num_tel_pm = '';
    if(document.getElementById('myNumberaddpm').value <= document.getElementById("myNumberremovepm").value)
    {
        
        error_mobile_pm = 'Veuillez ajouter au moins un numéro de téléphone .';
        $('#error_mobile_pm').text(error_mobile_pm);
        $('#addnumpm').addClass('has-error');
        $('#addnumpm').addClass('form-control is-invalid');
       
    }
    else{
        error_mobile_pm = '';
        $('#error_mobile_pm').text(error_mobile_pm);
        $('#addnumpm').removeClass('has-error');
        $('#addnumpm').removeClass('form-control is-invalid');
   
    }

    if($.trim($('#titre_tel_pm').val()).length == 0){
            error_titre_tel_pm = 'Veuillez fournir un titre .';
            $('#error_titre_tel_pm').text(error_titre_tel_pm);
            $('#titre_tel_pm').addClass('has-error');
            $('#titre_tel_pm').addClass('form-control is-invalid');

        }
        else{
            error_titre_tel_pm = '';
            $('#error_titre_tel_pm').text(error_titre_tel_pm);
            $('#titre_tel_pm').removeClass('has-error');
            $('#titre_tel_pm').removeClass('form-control is-invalid');
            $('#titre_tel_pm').addClass('form-control is-valid');

        }

    if($.trim($('#num_tel_pm').val()).length == 0){
            error_num_tel_pm = 'Veuillez fournir un numéro de téléphone .';
            $('#error_num_tel_pm').text(error_num_tel_pm);
            $('#num_tel_pm').addClass('has-error');
            $('#num_tel_pm').addClass('form-control is-invalid');

        }else{
            error_num_tel_pm = '';
            $('#error_num_tel_pm').text(error_num_tel_pm);
            $('#num_tel_pm').removeClass('has-error');
            $('#num_tel_pm').removeClass('form-control is-invalid');
            $('#num_tel_pm').addClass('form-control is-valid');

        }


    if(error_mobile_pm != '' || error_titre_tel_pm != '' || error_num_tel_pm != '')
        {
        return false;
        }
    else
        {  
         $('#list_mobile_pm').removeClass('active active_tab1');
         $('#list_mobile_pm').removeAttr('href data-toggle');
         $('#mobile_pm').removeClass('active');
         $('#mobile_pm').addClass('fade');
         element3.classList.remove("icon-done_all");
         $('#list_adresse_pm').removeClass('inactive_tab1');
         $('#list_adresse_pm').addClass('active_tab1 active');
         $('#list_adresse_pm').attr('href', '#adresse_pm');
         $('#list_adresse_pm').attr('data-toggle', 'tab');
         $('#adresse_pm').removeClass('fade');
         $('#adresse_pm').addClass('active');
         element4.classList.add("icon-done_all");
        }    

});

$('#previous_btn_adresse_client_pm').click(function(){ 
    $('#list_adresse_pm').removeClass('active active_tab1');
    $('#list_adresse_pm').removeAttr('href data-toggle');
    $('#adresse_pm').removeClass('active');
    $('#adresse_pm').addClass('fade');
    element4.classList.remove("icon-done_all");
    $('#list_adresse_pm').addClass('inactive_tab1');
    $('#list_mobile_pm').removeClass('inactive_tab1');
    $('#list_mobile_pm').addClass('active_tab1 active');
    $('#list_mobile_pm').attr('href', '#mobile_pm');
    $('#list_mobile_pm').attr('data-toggle', 'tab');
    $('#mobile_pm').removeClass('fade');
    $('#mobile_pm').addClass('active');
    element3.classList.add("icon-done_all");
});


$('#btn_adresse_client_pm').click(function(){
    $('#list_adresse_pm').removeClass('active active_tab1');
    $('#list_adresse_pm').removeAttr('href data-toggle');
    $('#adresse_pm').removeClass('active');
    $('#adresse_pm').addClass('fade');
    element4.classList.remove("icon-done_all");
    $('#list_autres_donnees_client_pm').removeClass('inactive_tab1');
    $('#list_autres_donnees_client_pm').addClass('active_tab1 active');
    $('#list_autres_donnees_client_pm').attr('href', '#autres_donnees_client_pm');
    $('#list_autres_donnees_client_pm').attr('data-toggle', 'tab');
    $('#autres_donnees_client_pm').removeClass('fade');
    $('#autres_donnees_client_pm').addClass('active');
    element5.classList.add("icon-done_all");
});


$('#previous_btn_autres_donnees_client_pm').click(function(){ 
    $('#list_autres_donnees_client_pm').removeClass('active active_tab1');
    $('#list_autres_donnees_client_pm').removeAttr('href data-toggle');
    $('#autres_donnees_client_pm').removeClass('active');
    $('#autres_donnees_client_pm').addClass('fade');
    element5.classList.remove("icon-done_all");
    $('#list_adresse_pm').addClass('inactive_tab1');
    $('#list_adresse_pm').removeClass('inactive_tab1');
    $('#list_adresse_pm').addClass('active_tab1 active');
    $('#list_adresse_pm').attr('href', '#adresse_pm');
    $('#list_adresse_pm').attr('data-toggle', 'tab');
    $('#adresse_pm').removeClass('fade');
    $('#adresse_pm').addClass('active');
    element4.classList.add("icon-done_all");
});

$('#btn_autres_donnees_client_pm').click(function(){
     $('#list_autres_donnees_client_pm').removeClass('active active_tab1');
     $('#list_autres_donnees_client_pm').removeAttr('href data-toggle');
     $('#autres_donnees_client_pm').removeClass('active');
     $('#autres_donnees_client_pm').addClass('fade');
     element5.classList.remove("icon-done_all");
     $('#list_autres_donnees_commerciales_pm').removeClass('inactive_tab1');
     $('#list_autres_donnees_commerciales_pm').addClass('active_tab1 active');
     $('#list_autres_donnees_commerciales_pm').attr('href', '#autres_donnees_commerciales_pm');
     $('#list_autres_donnees_commerciales_pm').attr('data-toggle', 'tab');
     $('#autres_donnees_commerciales_pm').removeClass('fade');
     $('#autres_donnees_commerciales_pm').addClass('active');
     element6.classList.add("icon-done_all"); 
    
});


$('#previous_autres_donnees_commerciales_pm').click(function(){ 
    $('#list_autres_donnees_commerciales_pm').removeClass('active active_tab1');
    $('#list_autres_donnees_commerciales_pm').removeAttr('href data-toggle');
    $('#autres_donnees_commerciales_pm').removeClass('active');
    $('#autres_donnees_commerciales_pm').addClass('fade');
    element6.classList.remove("icon-done_all");
    $('#list_autres_donnees_client_pm').addClass('inactive_tab1');
    $('#list_autres_donnees_client_pm').removeClass('inactive_tab1');
    $('#list_autres_donnees_client_pm').addClass('active_tab1 active');
    $('#list_autres_donnees_client_pm').attr('href', '#autres_donnees_client_pm');
    $('#list_autres_donnees_client_pm').attr('data-toggle', 'tab');
    $('#autres_donnees_client_pm').removeClass('fade');
    $('#autres_donnees_client_pm').addClass('active');
    element5.classList.add("icon-done_all");
});

$('#btn_autres_donnees_commerciales_pm').click(function(){
     $('#list_autres_donnees_commerciales_pm').removeClass('active active_tab1');
     $('#list_autres_donnees_commerciales_pm').removeAttr('href data-toggle');
     $('#autres_donnees_commerciales_pm').removeClass('active');
     $('#autres_donnees_commerciales_pm').addClass('fade');
     element6.classList.remove("icon-done_all");
     $('#list_confirmation_pm').removeClass('inactive_tab1');
     $('#list_confirmation_pm').addClass('active_tab1 active');
     $('#list_confirmation_pm').attr('href', '#confiramtion_pm');
     $('#list_confirmation_pm').attr('data-toggle', 'tab');
     $('#confiramtion_pm').removeClass('fade');
     $('#confiramtion_pm').addClass('active');
     element7.classList.add("icon-done_all"); 
    
});


$('#previous_confirmation_pm').click(function(){ 
    $('#list_confirmation_pm').removeClass('active active_tab1');
    $('#list_confirmation_pm').removeAttr('href data-toggle');
    $('#confiramtion_pm').removeClass('active');
    $('#confiramtion_pm').addClass('fade');
    element7.classList.remove("icon-done_all");
    $('#list_autres_donnees_commerciales_pm').addClass('inactive_tab1');
    $('#list_autres_donnees_commerciales_pm').removeClass('inactive_tab1');
    $('#list_autres_donnees_commerciales_pm').addClass('active_tab1 active');
    $('#list_autres_donnees_commerciales_pm').attr('href', '#autres_donnees_commerciales_pm');
    $('#list_autres_donnees_commerciales_pm').attr('data-toggle', 'tab');
    $('#autres_donnees_commerciales_pm').removeClass('fade');
    $('#autres_donnees_commerciales_pm').addClass('active');
    element6.classList.add("icon-done_all");
});

$('#btn_confirmation_pm').click(function(){
    
    var error_confirmation_pm = '';
    var checkBox = document.getElementById("customSwitch2");
    
    if (checkBox.checked == false){
        error_confirmation_pm = 'Veuillez activer le checkbox pour confirmer vos informations .';
        $('#error_confirmation_pm').text(error_confirmation_pm);
        $('#customSwitch2').addClass('has-error');
        $('#customSwitch2').addClass('form-control is-invalid');
        
      } else {
        error_confirmation_pm = '';
        $('#error_confirmation_pm').text(error_confirmation_pm);
        $('#customSwitch2').removeClass('has-error');
        $('#customSwitch2').removeClass('form-control is-invalid');
        $('#customSwitch2').addClass('form-control is-valid');
        $('#btn_confirmation_pm').attr("disabled", "disabled");
        $(document).css('cursor', 'prgress');
        $("#register_form_pm").submit();
        
        
      }

});

    

});














$(document).ready(function(){
	var pm=100;
  
	$('#addnumpm').click(function(){
		pm++;
		$('#dynamic_field_num_pm').append(
      '<tr id="row'+pm+'"><td><label>Titre</label><input class="form-control form-control-sm" id="titre_tel_pm" name="pm_titre_tel_'+pm+'" type="text"><div id="error_titre_tel_pm" class="invalid-feedback"></div></td><td><label>Numéro de téléphone</label><input class="form-control form-control-sm" type="text" id="num_tel_pm" name="pm_num_tel_'+pm+'"><div id="error_num_tel_pm" class="invalid-feedback"></div></td><td><br><button type="button" name="removenumpm" id="'+pm+'" class="btn btn-outline-danger btn_remove_pm"><span class="icon-trash-2"></span></button></td></tr>'
     
      );
      var p = pm-1 ;
      document.getElementById("myNumberaddpm").value = p; 
      return p;
	});

    
    var pmm=100;
   
        $(document).on('click', '.btn_remove_pm', function(){
            var id_num_pm = $(this).attr("id"); 
            $('#row'+id_num_pm+'').remove();
            pmm++; 

        var m = pmm-1 ;
        document.getElementById("myNumberremovepm").value = m;
        return m;
    
        });
    
    
   
		
});



$(document).ready(function(){
	var x=50;
	$('#ajout_adresse_pm').click(function(){
		x++;
		$('#dynamic_field_pm').append(
      '<tr id="row'+x+'"><td><br><label>Adresse</label><textarea class="form-control form-control-sm" id="adresse_complet_pm" name="pm_adresse_'+x+'" rows="2"></textarea></td><td><label>Région</label><input type="text" class="form-control form-control-sm" id="region_pm" name="pm_region_'+x+'"></td><td><label>Code Postal</label><input type="text" class="form-control form-control-sm" id="code_postal_pm" name="pm_code_postal_'+x+'"></td><td><label>Pays</label><select id="pays_pm" name="pm_pays_'+x+'" class="form-control form-control-sm"><option selected="true" value="Tunisie">Tunisie</option><option value="Irak">Irak</option><option value="France">France</option></select></td><td><br><button type="button" name="removeadressepm" id="'+x+'" class="btn btn-danger btn_remove_adressepm"><span class="icon-trash-2"></span></button></td></tr>'
      );
      var z = x-1 ;
      document.getElementById("myAdresseaddpm").value = z; 
      return c;
      
	});
    
    var xx=50;
	$(document).on('click', '.btn_remove_adressepm', function(){
        xx++;
		var id_adresse_pm = $(this).attr("id"); 
        $('#row'+id_adresse_pm+'').remove();
        var zz = xx-1 ;
        document.getElementById("myAdresseremovepm").value = zz;
        return zz;
	});
		
});
































//**********************************Personne Physique********************************//


$(document).ready(function(){
 
    var element1 = document.getElementById("1");  
    var element2 = document.getElementById("2");
    var element3 = document.getElementById("3");  
    var element4 = document.getElementById("4");
    var element5 = document.getElementById("5");
    var element6 = document.getElementById("6");
    var element7 = document.getElementById("7");   

     $('#btn_suivant').click(function(){
      
      var error_nom = '';
      var error_prenom = '';
      
      if($.trim($('#nom').val()).length == 0)
      {
       error_nom = 'Veuillez fournir un nom .';
       $('#error_nom').text(error_nom);
       $('#nom').removeClass('form-control is-valid');
       $('#nom').addClass('has-error');
       $('#nom').addClass('form-control is-invalid');
      }
      else
      {
        error_nom = '';
        $('#error_nom').text(error_nom);
        $('#nom').removeClass('has-error');
        $('#nom').removeClass('form-control is-invalid'); 
        $('#nom').addClass('form-control is-valid');
      }
      
      if($.trim($('#prenom').val()).length == 0)
      {
       error_prenom = 'Veuillez fournir un prénom .';
       $('#error_prenom').text(error_prenom);
       $('#prenom').removeClass('form-control is-valid');
       $('#prenom').addClass('has-error');
       $('#prenom').addClass('form-control is-invalid');
      }
      else
      {
       error_prenom = '';
       $('#error_prenom').text(error_prenom);
       $('#prenom').removeClass('has-error');
       $('#prenom').removeClass('form-control is-invalid');
       $('#prenom').addClass('form-control is-valid');
      }
    
      if(error_nom != '' || error_prenom != '')
      {
       return false;
      }
      else
      { 
       $('#list_donnees_client').removeClass('active active_tab1');
       $('#list_donnees_client').removeAttr('href data-toggle');
       $('#donnees_client').removeClass('active');
       $('#donnees_client').addClass('fade');
       element1.classList.remove("icon-done_all");
       $('#list_donnees_client').addClass('inactive_tab1');
       $('#list_coordonnees_client').removeClass('inactive_tab1');
       $('#list_coordonnees_client').addClass('active_tab1 active');
       $('#coordonnees_client').removeClass('fade');
       $('#coordonnees_client').addClass('active');
       element2.classList.add("icon-done_all");
      
      }
     });
    
     $('#previous_btn_coordonnees_client').click(function(){ 
          $('#list_coordonnees_client').removeClass('active active_tab1');
          $('#list_coordonnees_client').removeAttr('href data-toggle');
          $('#coordonnees_client').removeClass('active');
          $('#coordonnees_client').addClass('fade');
          element2.classList.remove("icon-done_all");
          $('#list_coordonnees_client').addClass('inactive_tab1');
          $('#list_donnees_client').removeClass('inactive_tab1');
          $('#list_donnees_client').addClass('active_tab1 active');
          $('#list_donnees_client').attr('href', '#donnees_client');
          $('#list_donnees_client').attr('data-toggle', 'tab');
          $('#donnees_client').removeClass('fade');
          $('#donnees_client').addClass('active');
          element1.classList.add("icon-done_all");
     });
    
    
     
     $('#btn_coordonnees_client').click(function(){


        
      var error_email = '';
      var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;


      // number of all rows existe en ajouterclient.html.twig en haut 
      var number_email = document.getElementById("number_email").innerText;

      // recuperer email dans input
      var email = document.getElementById('email').value;


      
      
      if($.trim($('#email').val()).length == 0)
      {
        error_email = 'Veuillez fournir une adresse e-mail .';
        $('#error_email').text(error_email);
        $('#email').removeClass('form-control is-valid');
        $('#email').addClass('has-error');
        $('#email').addClass('form-control is-invalid');
    
      }
      else
      {
       if (!filter.test($('#email').val()))
       {
        error_email = "Cette adresse email n'est pas valide .";
        $('#error_email').text(error_email);
        $('#email').removeClass('form-control is-valid');
        $('#email').addClass('has-error');
        $('#email').addClass('form-control is-invalid');
       }
       else
       {
        for (var i = 1; i <= number_email; i++) { 
                
            // recuperer tous les emails selon i
            var span_email = document.getElementById(i).innerText; 
    
            // if email dans input est egal list emails
                if(email == span_email){
    
                    error_email = 'Cette adresse e-mail existe déjà !';
                    $('#error_email').text(error_email);
                    $('#email').removeClass('form-control is-valid');
                    $('#email').addClass('has-error');
                    $('#email').addClass('form-control is-invalid');
                }
    
        }
       }
      }



      if(error_email != '')
      {
       return false;
      }
      else
      { 
          
       error_email = '';
       $('#error_email').text(error_email);
       $('#email').removeClass('form-control is-invalid');
       $('#email').removeClass('has-error');
       $('#email').addClass('form-control is-valid'); 

       $('#list_coordonnees_client').removeClass('active active_tab1');
       $('#list_coordonnees_client').removeAttr('href data-toggle');
       $('#coordonnees_client').removeClass('active');
       $('#coordonnees_client').addClass('fade');
       element2.classList.remove("icon-done_all");
       $('#list_mobile').removeClass('inactive_tab1');
       $('#list_mobile').addClass('active_tab1 active');
       $('#list_mobile').attr('href', '#mobile');
       $('#list_mobile').attr('data-toggle', 'tab');
       $('#mobile').removeClass('fade');
       $('#mobile').addClass('active');
       element3.classList.add("icon-done_all");
      }
    
      
     });
    
    
     $('#previous_btn_mobile_client').click(function(){ 
          $('#list_mobile').removeClass('active active_tab1');
          $('#list_mobile').removeAttr('href data-toggle');
          $('#mobile').removeClass('active');
          $('#mobile').addClass('fade');
          element3.classList.remove("icon-done_all");
          $('#list_mobile').addClass('inactive_tab1');
          $('#list_coordonnees_client').removeClass('inactive_tab1');
          $('#list_coordonnees_client').addClass('active_tab1 active');
          $('#list_coordonnees_client').attr('href', '#donnees_client');
          $('#list_coordonnees_client').attr('data-toggle', 'tab');
          $('#coordonnees_client').removeClass('fade');
          $('#coordonnees_client').addClass('active');
          element2.classList.add("icon-done_all");
     });
    
     $('#btn_mobile_client').click(function(){
    
        var error_mobile = '';
        var error_titre_tel = '';
        var error_num_tel = '';
        if(document.getElementById('myNumberadd').value <= document.getElementById("myNumberremove").value)
        {
            
            error_mobile = 'Veuillez ajouter au moins un numéro de téléphone .';
            $('#error_mobile').text(error_mobile);
            $('#addnum').addClass('has-error');
            $('#addnum').addClass('form-control is-invalid');
           
        }
        else{
            error_mobile = '';
            $('#error_mobile').text(error_email);
            $('#addnum').removeClass('has-error');
            $('#addnum').removeClass('form-control is-invalid');
       
        }
    
        if($.trim($('#titre_tel').val()).length == 0){
                error_titre_tel = 'Veuillez fournir un titre .';
                $('#error_titre_tel').text(error_titre_tel);
                $('#titre_tel').addClass('has-error');
                $('#titre_tel').addClass('form-control is-invalid');
    
            }
            else{
                error_titre_tel = '';
                $('#error_titre_tel').text(error_titre_tel);
                $('#titre_tel').removeClass('has-error');
                $('#titre_tel').removeClass('form-control is-invalid');
                $('#titre_tel').addClass('form-control is-valid');
    
            }
    
        if($.trim($('#num_tel').val()).length == 0){
                error_num_tel = 'Veuillez fournir un numéro de téléphone .';
                $('#error_num_tel').text(error_num_tel);
                $('#num_tel').addClass('has-error');
                $('#num_tel').addClass('form-control is-invalid');
    
            }else{
                error_num_tel = '';
                $('#error_num_tel').text(error_num_tel);
                $('#num_tel').removeClass('has-error');
                $('#num_tel').removeClass('form-control is-invalid');
                $('#num_tel').addClass('form-control is-valid');
    
            }


        if(error_mobile != '' || error_titre_tel != '' || error_num_tel != '')
            {
            return false;
            }
        else
            {  
             $('#list_mobile').removeClass('active active_tab1');
             $('#list_mobile').removeAttr('href data-toggle');
             $('#mobile').removeClass('active');
             $('#mobile').addClass('fade');
             element3.classList.remove("icon-done_all");
             $('#list_adresse').removeClass('inactive_tab1');
             $('#list_adresse').addClass('active_tab1 active');
             $('#list_adresse').attr('href', '#adresse');
             $('#list_adresse').attr('data-toggle', 'tab');
             $('#adresse').removeClass('fade');
             $('#adresse').addClass('active');
             element4.classList.add("icon-done_all");
            }    
    
    });


    $('#previous_btn_adresse_client').click(function(){ 
        $('#list_adresse').removeClass('active active_tab1');
        $('#list_adresse').removeAttr('href data-toggle');
        $('#adresse').removeClass('active');
        $('#adresse').addClass('fade');
        element4.classList.remove("icon-done_all");
        $('#list_adresse').addClass('inactive_tab1');
        $('#list_mobile').removeClass('inactive_tab1');
        $('#list_mobile').addClass('active_tab1 active');
        $('#list_mobile').attr('href', '#donnees_client');
        $('#list_mobile').attr('data-toggle', 'tab');
        $('#mobile').removeClass('fade');
        $('#mobile').addClass('active');
        element3.classList.add("icon-done_all");
   });



   $('#btn_adresse_client').click(function(){
   
    
     $('#list_adresse').removeClass('active active_tab1');
     $('#list_adresse').removeAttr('href data-toggle');
     $('#adresse').removeClass('active');
     $('#adresse').addClass('fade');
     element4.classList.remove("icon-done_all");
     $('#list_autres_donnees_client').removeClass('inactive_tab1');
     $('#list_autres_donnees_client').addClass('active_tab1 active');
     $('#list_autres_donnees_client').attr('href', '#autres_donnees_client');
     $('#list_autres_donnees_client').attr('data-toggle', 'tab');
     $('#autres_donnees_client').removeClass('fade');
     $('#autres_donnees_client').addClass('active');
     element5.classList.add("icon-done_all");
   

});
    
    
$('#previous_btn_autres_donnees_client').click(function(){ 
    $('#list_autres_donnees_client').removeClass('active active_tab1');
    $('#list_autres_donnees_client').removeAttr('href data-toggle');
    $('#autres_donnees_client').removeClass('active');
    $('#autres_donnees_client').addClass('fade');
    element5.classList.remove("icon-done_all");
    $('#list_adresse').addClass('inactive_tab1');
    $('#list_adresse').removeClass('inactive_tab1');
    $('#list_adresse').addClass('active_tab1 active');
    $('#list_adresse').attr('href', '#adresse');
    $('#list_adresse').attr('data-toggle', 'tab');
    $('#adresse').removeClass('fade');
    $('#adresse').addClass('active');
    element4.classList.add("icon-done_all");
});

$('#btn_autres_donnees_client').click(function(){
    $('#list_autres_donnees_client').removeClass('active active_tab1');
     $('#list_autres_donnees_client').removeAttr('href data-toggle');
     $('#autres_donnees_client').removeClass('active');
     $('#autres_donnees_client').addClass('fade');
     element5.classList.remove("icon-done_all");
     $('#list_autres_donnees_commerciales').removeClass('inactive_tab1');
     $('#list_autres_donnees_commerciales').addClass('active_tab1 active');
     $('#list_autres_donnees_commerciales').attr('href', '#autres_donnees_commerciales');
     $('#list_autres_donnees_commerciales').attr('data-toggle', 'tab');
     $('#autres_donnees_commerciales').removeClass('fade');
     $('#autres_donnees_commerciales').addClass('active');
     element6.classList.add("icon-done_all"); 
    
});

$('#previous_autres_donnees_commerciales').click(function(){ 
    $('#list_autres_donnees_commerciales').removeClass('active active_tab1');
    $('#list_autres_donnees_commerciales').removeAttr('href data-toggle');
    $('#autres_donnees_commerciales').removeClass('active');
    $('#autres_donnees_commerciales').addClass('fade');
    element6.classList.remove("icon-done_all");
    $('#list_autres_donnees_client').addClass('inactive_tab1');
    $('#list_autres_donnees_client').removeClass('inactive_tab1');
    $('#list_autres_donnees_client').addClass('active_tab1 active');
    $('#list_autres_donnees_client').attr('href', '#autres_donnees_client');
    $('#list_autres_donnees_client').attr('data-toggle', 'tab');
    $('#autres_donnees_client').removeClass('fade');
    $('#autres_donnees_client').addClass('active');
    element5.classList.add("icon-done_all");
});

$('#btn_autres_donnees_commerciales').click(function(){
     $('#list_autres_donnees_commerciales').removeClass('active active_tab1');
     $('#list_autres_donnees_commerciales').removeAttr('href data-toggle');
     $('#autres_donnees_commerciales').removeClass('active');
     $('#autres_donnees_commerciales').addClass('fade');
     element6.classList.remove("icon-done_all");
     $('#list_confirmation').removeClass('inactive_tab1');
     $('#list_confirmation').addClass('active_tab1 active');
     $('#list_confirmation').attr('href', '#confiramtion');
     $('#list_confirmation').attr('data-toggle', 'tab');
     $('#confiramtion').removeClass('fade');
     $('#confiramtion').addClass('active');
     element7.classList.add("icon-done_all"); 
    
});

$('#previous_confirmation').click(function(){ 
    $('#list_confirmation').removeClass('active active_tab1');
    $('#list_confirmation').removeAttr('href data-toggle');
    $('#confiramtion').removeClass('active');
    $('#confiramtion').addClass('fade');
    element7.classList.remove("icon-done_all");
    $('#list_autres_donnees_commerciales').addClass('inactive_tab1');
    $('#list_autres_donnees_commerciales').removeClass('inactive_tab1');
    $('#list_autres_donnees_commerciales').addClass('active_tab1 active');
    $('#list_autres_donnees_commerciales').attr('href', '#autres_donnees_commerciales');
    $('#list_autres_donnees_commerciales').attr('data-toggle', 'tab');
    $('#autres_donnees_commerciales').removeClass('fade');
    $('#autres_donnees_commerciales').addClass('active');
    element6.classList.add("icon-done_all");
});

$('#btn_confirmation').click(function(){
    
    var error_confirmation = '';
    var checkBox = document.getElementById("customSwitch1");
    
    if (checkBox.checked == false){
        error_confirmation = 'Veuillez activer le checkbox pour confirmer vos informations .';
        $('#error_confirmation').text(error_confirmation);
        $('#customSwitch1').addClass('has-error');
        $('#customSwitch1').addClass('form-control is-invalid');
        
      } else {
        error_confirmation = '';
        $('#error_confirmation').text(error_confirmation);
        $('#customSwitch1').removeClass('has-error');
        $('#customSwitch1').removeClass('form-control is-invalid');
        $('#customSwitch1').addClass('form-control is-valid');
        $('#btn_confirmation').attr("disabled", "disabled");
        $(document).css('cursor', 'prgress');
        $("#register_form").submit();
        
        
      }

});
    
});




// Add tel and adresse  JS   





$(document).ready(function(){
	var j=1;
  
	$('#addnum').click(function(){
		j++;
		$('#dynamic_field_num').append(
      '<tr id="row'+j+'"><td><label>Titre</label><input class="form-control form-control-sm" id="titre_tel" name="titre_tel_'+j+'" type="text"><div id="error_titre_tel" class="invalid-feedback"></div></td><td><label>Numéro de téléphone</label><input class="form-control form-control-sm" type="text" id="num_tel" name="num_tel_'+j+'"><div id="error_num_tel" class="invalid-feedback"></div></td><td><br><button type="button" name="removenum" id="'+j+'" class="btn btn-outline-danger btn_remove"><span class="icon-trash-2"></span></button></td></tr>'
     
      );
      var a = j-1 ;
      document.getElementById("myNumberadd").value = a; 
      return a;
	});

    
    var t=1;
    
        $(document).on('click', '.btn_remove', function(){
            var id_num = $(this).attr("id");
            if(document.getElementsByName("removenum")){
            $('#row'+id_num+'').remove();
            t++;
        } 
        var b = t-1 ;
        document.getElementById("myNumberremove").value = b;
        return b;
        });
    
   
		
});




$(document).ready(function(){
	var i=20;
	$('#ajout_adresse').click(function(){
		i++;
		$('#dynamic_field').append(
      '<tr id="row'+i+'"><td><br><label>Adresse</label><textarea class="form-control form-control-sm" id="adresse_complet" name="adresse_'+i+'" rows="2"></textarea><div id="error_adresse_complet" class="invalid-feedback"></td><td><label>Région</label><input type="text" class="form-control form-control-sm" id="region" name="region_'+i+'"><div id="error_region" class="invalid-feedback"></td><td><label>Code Postal</label><input type="text" class="form-control form-control-sm" id="code_postal" name="code_postal_'+i+'"><div id="error_cp" class="invalid-feedback"></td><td><label>Pays</label><select id="pays" name="pays_'+i+'" class="form-control form-control-sm"><option selected="true" value="Tunisie">Tunisie</option><option value="Irak">Irak</option><option value="France">France</option></select></td><td><br><button type="button" name="removeadresse" id="'+i+'" class="btn btn-danger btn_remove_adresse"><span class="icon-trash-2"></span></button></td></tr>'
      );
      var c = i-1 ;
      document.getElementById("myAdresseadd").value = c; 
      return c;
      
	});
    
    var h=20;
	$(document).on('click', '.btn_remove_adresse', function(){
        h++;
        var id_adresse = $(this).attr("id");
        if(document.getElementsByName("removeadresse")){ 
        $('#row'+id_adresse+'').remove();
        var k = h-1 ;
        }
        document.getElementById("myAdresseremove").value = k;
        return k;
	});
		
});
