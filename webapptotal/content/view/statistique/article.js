$(function(){
    // $('#upload').addClass("cache");
    $('#addArticle').on('submit', function(e) {
        altair_helpers.content_preloader_show('regular');
        e.preventDefault();
            var formData = new FormData(this);
             
        $.ajax({
            type: "POST",
            url: "php/Controller/article.php", //process to mail
            data: formData,
            mimeType: "multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(msg){
                if(parseInt(msg)==1){
                    UIkit.modal.alert('<p class="uk-text-bold"><i class="uk-icon-check uk-icon-large uk-text-success"> </i> L article a été ajoutée avec succès</p>');
                     altair_helpers.content_preloader_hide();
                    // $(document).click(function(){
                    //     window.location.href = "index.php";
                    // });
                   
                }
               //alert(msg);
            },
            error: function(){
                    alert(msg);

            }
        });
        return false;
        // }
        
    });
    
    
    
});


// $(function(){
//     $('#monForm').on('submit', function(e) {
//         altair_helpers.content_preloader_show('regular');

//         e.preventDefault();     
// 		$.ajax({
// 			type: "POST",
// 			url: "./php/Controller/article.php", //process to mail
// 			data: $(this).serialize(),
// 			success: function(msg){
//                 if(parseInt(msg)==1){
                    
//                      UIkit.modal.alert('<p class="uk-text-bold"><i class="uk-icon-check uk-icon-large uk-text-success"> </i> L article a été ajoutée avec succès</p>');
//                     altair_helpers.content_preloader_hide();
//                     $(document).click(function(){
// 			            window.location.href = "article";
//                     });
                   
//                 }else{ UIkit.modal.alert('<p class="uk-text-bold"><i class="uk-icon-check uk-icon-large uk-text-danger"> </i> Erreur lors de l\'insertion Veuillez reéssayer plus tard</p>');
//                     altair_helpers.content_preloader_hide();
//                     $(document).click(function(){
// 			            window.location.href = "article";
//                     });}
//                // alert(msg);
               
//             },
// 			error: function(){
//                    $('#message').html('<div class="uk-alert uk-alert-danger" data-uk-alert=""><a href="#" class="uk-alert-close uk-close"></a>Erreur lors de l\'insertion Veuillez contacter l\' administrateur</div>');
//              altair_helpers.content_preloader_hide();

// 			}
// 		});
// 	});
    
//     $('#monFormMod').on('submit', function(e) {
//         altair_helpers.content_preloader_show('regular');

//         e.preventDefault();     
// 		$.ajax({
// 			type: "POST",
// 			url: "./php/Controller/article.php", //process to mail
// 			data: $(this).serialize(),
// 			success: function(msg){
//                 if(parseInt(msg)==1){
                    
//                      UIkit.modal.alert('<p class="uk-text-bold"><i class="uk-icon-check uk-icon-large uk-text-success"> </i> L article a été modifiée avec succès</p>');
//                     altair_helpers.content_preloader_hide();
//                     $(document).click(function(){
// 			            window.location.href = "article";
//                     });
                   
//                 }else{
                    
//                      UIkit.modal.alert('<p class="uk-text-bold"><i class="uk-icon-check uk-icon-large uk-text-danger"> </i> Erreur lors de l\'insertion Veuillez reéssayer plus tard</p>');
//                     altair_helpers.content_preloader_hide();
//                     $(document).click(function(){
// 			            window.location.href = "article";
//                     });
                   
//                 }
                  
//                 //alert(msg);
               
//             },
// 			error: function(){
//                    $('#message').html('<div class="uk-alert uk-alert-danger" data-uk-alert=""><a href="#" class="uk-alert-close uk-close"></a>Erreur lors de l\'insertion Veuillez contacter l\' administrateur</div>');
//              altair_helpers.content_preloader_hide();

// 			}
// 		});
// 	});
    
// });
