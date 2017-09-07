$(function(){
    var tab=new Array;
     var i=0;
    $('.tabl > tbody > tr').css('cursor','pointer');
       $("#modif").hide();
       $("#supp").hide();
   $("#delete").click(function(){
            var Id = $('#sup').attr('value');
             $("#supp").trigger('click');
             altair_helpers.content_preloader_show('regular');
            $.ajax({
                    type: "GET",
                    url: "php/Controller/utilisateur.php?supprimer="+Id, //process to mail
                    data: '',
                    success: function(msg){
                            if(parseInt(msg)==1){
                             UIkit.modal.alert('<p class="uk-text-bold"><i class="uk-icon-check uk-icon-large uk-text-success"></i> Suppression effectuée avec succès</p>');
                            altair_helpers.content_preloader_hide();
                            $(document).click(function(){
                               location.reload();
                            });

                        }else{ UIkit.modal.alert('<p class="uk-text-bold"><i class="uk-icon-check uk-icon-large uk-text-danger"></i> Erreur lors de Suppresion Veuillez reéssayer ulterieurement</p>');
                            altair_helpers.content_preloader_hide();
                            }
                       //alert(msg); 
                    },
                    error: function(){
                        alert("failure");
                    }
                });
	});
 
 
  $("#modif").click(function(){
    var Id=tab[0];
      window.location.href = "utilisateur_modifier-"+Id;
    });
 
 $("#supp").click(function(){
    var Id=tab.join('$');
    $("#sup").attr('value', Id);
      
       
    });
       

 $('.tabl > tbody > tr').click(function() {
    var t = $(this).attr('rel');
    if(t != 1){
       $(this).css('background','#90E5B7');
       $(this).attr('rel', 1);
        tab[i] = $(this).attr('id');
        if(tab.length != 1){
         $('#modif').hide(); 
         
        }else
          $('#modif').show();
        
        if(tab.length > 0)
            $('#supp').show();
        i++;
     }else{
       $(this).attr('rel', 0);
       $(this).css('background','#FFF');
         var rm = $(this).attr('id');
         tab = jQuery.grep(tab, function(value){
            return value != rm;
             
         });
         if(tab.length == 1){
         $('#modif').show(); 
         
        }else
            $('#modif').hide();
         
         
         
        if(tab.length == 0){
         $('#supp').hide(); 
         
        }
         i--;
        
     }
  });
});
