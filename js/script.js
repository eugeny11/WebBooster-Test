$(function () {
    $('.card__button').click(function () {
      $('.modal__form').addClass('modal__form-active');
    });

    $('.modal__close-button').click(function () {
        $('.modal__form').removeClass('modal__form-active');
      });
});

$(document).ready(function(){
    $('.modal__submit-button').click(function(){
        
        var user_name = $('#name').val();
        var user_email = $('#email').val();
        var user_phone = $('#phone').val();
        var merchandise = $('#merchandise').val();
        
        $.ajax({
            url: "form.php", 
            type: "post", 
            data: { 
                "name": user_name,
                "email": user_email,
                "phone": user_phone,
                "merchandise": merchandise
            },
            error:function(){$("#erconts").html("Ошибка");}, 
                        
            beforeSend: function() {                     
                $("#erconts").html("Отправка");                   
            },                 
            success: function(result){                     
                
                $('#erconts').html(result);                     
                console.log("success");                 
            }  
        });
    });
});