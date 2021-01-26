
// ***************************  Wizard and validation  ************************* //




// ******************************* Personne Physique *****************************//






 $(document).ready(function(){

  
    $('1_suivant').click(function(){

        var id_test = $(this).attr("id");
        var x = document.getElementById('nom_edit_'+id_test+'').value;
        var y = document.getElementById('prenom_edit_'+id_test+'').value;
        
        
        var error_nom_edit = '';
        var error_prenom_edit = '';

        if($.trim(x).length == 0)
        {
            //alert($.trim(x).length);
            error_nom_edit = 'Veuillez fournir un nom .';
            $('#error_nom_edit_'+id_test+'').text(error_nom_edit);
            $('#nom_edit_'+id_test+'').removeClass('form-control is-valid');
            $('#nom_edit_'+id_test+'').addClass('has-error');
            $('#nom_edit_'+id_test+'').addClass('form-control is-invalid');
            
        }
        else
        {
            //alert($.trim(x).length);
            error_nom_edit = '';
            $('#error_nom_edit_'+id_test+'').text(error_nom_edit);
            $('#nom_edit_'+id_test+'').removeClass('has-error');
            $('#nom_edit_'+id_test+'').removeClass('form-control is-invalid'); 
            $('#nom_edit_'+id_test+'').addClass('form-control is-valid');
        }

        if($.trim(y).length == 0)
        {
            error_prenom_edit = 'Veuillez fournir un prénom .';
            $('#error_prenom_edit_'+id_test+'').text(error_prenom_edit);
            $('#prenom_edit_'+id_test+'').removeClass('form-control is-valid');
            $('#prenom_edit_'+id_test+'').addClass('has-error');
            $('#prenom_edit_'+id_test+'').addClass('form-control is-invalid');
        }
        else
        {
            error_prenom_edit = '';
            $('#error_prenom_edit_'+id_test+'').text(error_prenom_edit);
            $('#prenom_edit_'+id_test+'').removeClass('has-error');
            $('#prenom_edit_'+id_test+'').removeClass('form-control is-invalid');
            $('#prenom_edit_'+id_test+'').addClass('form-control is-valid');
        }

        if(error_nom_edit != '' || error_prenom_edit != '')
        {
         return false;
        }
        else
        { 
         $('#list_donnees_client_edit_'+id_test+'').removeClass('active active_tab1');
         $('#list_donnees_client_edit_'+id_test+'').removeAttr('href data-toggle');
         $('#donnees_client_edit_'+id_test+'').removeClass('active');
         $('#donnees_client_edit_'+id_test+'').addClass('fade');
         $('#1_'+id_test+'').removeClass('icon-done_all');
         $('#list_donnees_client_edit_'+id_test+'').addClass('inactive_tab1');
         $('#list_coordonnees_client_edit_'+id_test+'').removeClass('inactive_tab1');
         $('#list_coordonnees_client_edit_'+id_test+'').addClass('active_tab1 active');
         $('#coordonnees_client_edit_'+id_test+'').removeClass('fade');
         $('#coordonnees_client_edit_'+id_test+'').addClass('active');
         $('#2_'+id_test+'').addClass('icon-done_all');
        
        }

    });
    

    $('.2_precedent').click(function(){
        
        var id_test = $(this).attr("id");

        
        $('#list_coordonnees_client_edit_'+id_test+'').removeClass('active active_tab1');
        $('#list_coordonnees_client_edit_'+id_test+'').removeAttr('href data-toggle');
        $('#coordonnees_client_edit_'+id_test+'').removeClass('active');
        $('#coordonnees_client_edit_'+id_test+'').addClass('fade');
        $('#list_coordonnees_client_edit_'+id_test+'').addClass('inactive_tab1');
        $('#2_'+id_test+'').removeClass('icon-done_all');
        $('#list_donnees_client_edit_'+id_test+'').removeClass('inactive_tab1');
        $('#list_donnees_client_edit_'+id_test+'').addClass('active_tab1 active');
        $('#list_donnees_client_edit_'+id_test+'').attr('href', '#donnees_client_edit_'+id_test+'');
        $('#list_donnees_client_edit_'+id_test+'').attr('data-toggle', 'tab');
        $('#donnees_client_edit_'+id_test+'').removeClass('fade');
        $('#donnees_client_edit_'+id_test+'').addClass('active');
        $('#1_'+id_test+'').addClass('icon-done_all');
        
    });


    $('.2_suivant').click(function(){

        
        // id row
        var id_test = $(this).attr("id");
       
        var error_email = '';
        var error_email_2 = '';

        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        // value email selon id row changable
        var email = document.getElementById('email_edit_'+id_test+'').value;

        // value email selon id row non changable
        var email_origine = document.getElementById('email_origine_'+id_test+'').value; 
        

        // number of all rows  
        var number_email = document.getElementById("number_email").innerText;


        

        for (var i = 1; i <= number_email; i++) { 
                
            // recuperer tous les emails selon i
            var span_email = document.getElementById(i).innerText; 

            // if email dans input est egal email original
            if(email == email_origine){

                error_email = '';
                error_email_2 = '';
                $('#error_email_edit_'+id_test+'').text(error_email);
                $('#error_email_edit_2_'+id_test+'').text(error_email_2);
                $('#email_edit_'+id_test+'').removeClass('form-control is-invalid');
                $('#email_edit_'+id_test+'').addClass('has-error');
                $('#email_edit_'+id_test+'').addClass('form-control is-valid');        
    
            }else
                if(email == span_email){

                    error_email = 'Cette adresse e-mail existe déjà !';
                    error_email_2 = 'Veuillez fournir une autre .';
                    $('#error_email_edit_'+id_test+'').text(error_email);
                    $('#error_email_edit_2_'+id_test+'').text(error_email_2);

                    $('#email_edit_'+id_test+'').removeClass('form-control is-valid');
                    $('#email_edit_'+id_test+'').addClass('has-error');
                    $('#email_edit_'+id_test+'').addClass('form-control is-invalid');
                }

  
        }    
          


        if($.trim(email).length == 0)
        {
            error_email = 'Veuillez fournir une adresse e-mail .';
            error_email_2 = '';
            $('#error_email_edit_'+id_test+'').text(error_email);
            $('#error_email_edit_2_'+id_test+'').text(error_email_2);
            $('#email_edit_'+id_test+'').removeClass('form-control is-valid');
            $('#email_edit_'+id_test+'').addClass('has-error');
            $('#email_edit_'+id_test+'').addClass('form-control is-invalid');
        
        }else
        {
         if (!filter.test(email))
         {
            error_email = "Cette adresse email n'est pas valide .";
            error_email_2 = '';
            $('#error_email_edit_'+id_test+'').text(error_email);
            $('#error_email_edit_2_'+id_test+'').text(error_email_2);
            $('#email_edit_'+id_test+'').removeClass('form-control is-valid');
            $('#email_edit_'+id_test+'').addClass('has-error');
            $('#email_edit_'+id_test+'').addClass('form-control is-invalid');

         }
         
        }


        if(error_email == '')
        {
            error_email = '';
            error_email_2 = '';
            $('#error_email_edit_'+id_test+'').text(error_email);
            $('#error_email_edit_2_'+id_test+'').text(error_email_2);
            $('#email_edit_'+id_test+'').removeClass('form-control is-invalid');
            $('#email_edit_'+id_test+'').addClass('has-error');
            $('#email_edit_'+id_test+'').addClass('form-control is-valid');
        }


        if(error_email != '')
        {
        return false;
        }
        else
        { 
            $('#list_coordonnees_client_edit_'+id_test+'').removeClass('active active_tab1');
            $('#list_coordonnees_client_edit_'+id_test+'').removeAttr('href data-toggle');
            $('#coordonnees_client_edit_'+id_test+'').removeClass('active');
            $('#coordonnees_client_edit_'+id_test+'').addClass('fade');
            $('#2_'+id_test+'').removeClass('icon-done_all');
            $('#list_mobile_edit_'+id_test+'').removeClass('inactive_tab1');
            $('#list_mobile_edit_'+id_test+'').addClass('active_tab1 active');
            $('#list_mobile_edit_'+id_test+'').attr('href', '#mobile_edit_'+id_test+'');
            $('#list_mobile_edit_'+id_test+'').attr('data-toggle', 'tab');
            $('#mobile_edit_'+id_test+'').removeClass('fade');
            $('#mobile_edit_'+id_test+'').addClass('active');
            $('#3_'+id_test+'').addClass('icon-done_all'); 
        
        }
        

    });


    
    $('.3_precedent').click(function(){
        
        var id_test = $(this).attr("id");

        
        $('#list_mobile_edit_'+id_test+'').removeClass('active active_tab1');
        $('#list_mobile_edit_'+id_test+'').removeAttr('href data-toggle');
        $('#mobile_edit_'+id_test+'').removeClass('active');
        $('#mobile_edit_'+id_test+'').addClass('fade');
        $('#3_'+id_test+'').removeClass('icon-done_all');
        $('#list_coordonnees_client_edit_'+id_test+'').addClass('inactive_tab1');
        $('#list_coordonnees_client_edit_'+id_test+'').removeClass('inactive_tab1');
        $('#list_coordonnees_client_edit_'+id_test+'').addClass('active_tab1 active');
        $('#list_coordonnees_client_edit_'+id_test+'').attr('href', '#coordonnees_client_edit_'+id_test+'');
        $('#list_coordonnees_client_edit_'+id_test+'').attr('data-toggle', 'tab');
        $('#coordonnees_client_edit_'+id_test+'').removeClass('fade');
        $('#coordonnees_client_edit_'+id_test+'').addClass('active');
        $('#2_'+id_test+'').addClass('icon-done_all');
        
    });



    

   
  
	








});





