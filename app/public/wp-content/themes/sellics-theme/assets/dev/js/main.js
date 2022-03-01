"use strict";

(function ($) {

      $('#next').click(function (e) {
        e.preventDefault();
        if ($('.form-email').val() == "") {
            $(".err").css("display", "block");
          } else {
            $('.submit-form').addClass('next');
            $('.first-step').addClass('remove');
          }
      });

      $( "#main-form button.submit" ).click(function( event ) {
        let dataValues  = {
          "fields": $('#main-form').serializeArray()
        }
        $.ajax({
                url: "https://api.hsforms.com/submissions/v3/integration/submit/6969556/60340268-784d-4fe1-81f0-0b57a251e28b",
                type: "post",
                data: JSON.stringify(dataValues),
                contentType: 'application/json',
                success: function (response) {
                  console.log(response)
                },
                error: function(jqXHR, textStatus, errorThrown) {
                  console.log(textStatus, errorThrown);
                }
            });
          event.preventDefault();
      });

})(jQuery);