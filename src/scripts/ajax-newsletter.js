/* eslint-disable computed-property-spacing */
/* eslint-disable no-undef */
;(function($) {
	'use strict';



  console.log("ini js");

	//FORM SEND NEWSLETTER AJAX
	var ca_ajax_newsletter = function() {

    NProgress.configure({
      minimum: 0.95,
      easing: 'ease',
      speed: 800,
      showSpinner: true,
      trickle: false
    });

  // Initialize form validation on the newletter form.
  $("#newsletterform").validate({
    rules: {
      news_name: "required",
      news_email: "required email",
    },
    messages: {
      news_name: "Como gostaria de ser chamado?",
        news_email: {
            required: "Qual é seu e-mail?",
            email: "Digite um e-mail válido.",
        }
    },

    submitHandler: function(form) {

        console.log("ini submit");

        var news_name = $("#newsletterform #news_name").val();
        var news_email = $("#newsletterform #news_email").val();
        var btn_submit = "#newsletterform .frm-submit";
        var status = "#newsletterform .error-msg";
        var hero = ".hero-bg .hero-form";
        var tnks = ".hero-bg .hero-thankyou";

        $.ajax({
          url: ajax_url.ajaxurl,
          type: 'post',
          data: {
            'action': 'ajax_newsform',
            'news_name': news_name,
            'news_email': news_email
          },

          beforeSend: function beforeSend(response) {
            NProgress.start();
            $(btn_submit).attr("disabled", true);
            $(btn_submit).html("Enviando...");

          },
          success: function success(response) {
            if (response.status === "success") {
              NProgress.done();
              NProgress.remove();

              $(btn_submit).html("Me avise");
              $('#newsletterform')[0].reset();
              $(status).html("&nbsp;");

              $(hero).remove();
              console.log(response);

              setTimeout(function(){
                $(tnks).toggleClass("d-none")
              }, 200);

            } else if (response.status === "error") {
              NProgress.done();
              NProgress.remove();
              $(status).html("Erro, atualize a pagina para tentar novamente");

              console.log(response);
            } else if (response.status === "nopost") {
              console.log("nopost");
              $(btn_submit).attr("disabled", false);
              $(btn_submit).html("Me avise");

            }

            console.log(response);

            $(status).html("&nbsp;");
            $(btn_submit).attr("disabled", false);
            $(btn_submit).html("Me avise");
            NProgress.done();
            NProgress.remove();

          },
          error: function error(response) {
            NProgress.done();
            NProgress.remove();

            $(btn_submit).html("Me avise");
            $(btn_submit).attr("disabled", true);
            $(status).html("Erro, atualize a pagina para tentar novamente");

            console.log(response);
          }
        })
          return false;

          console.log('form enviado');
      }
    });

  }

	//Start all functions
	var init = function() {
		ca_ajax_newsletter();
	};

	$(init);

})(jQuery);
